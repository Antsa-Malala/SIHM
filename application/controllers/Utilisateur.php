<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function inscription()
	{
		$this->load->view('utilisateur/inscription');
	}
	public function inscription_trait()
	{
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$date_naissance=$this->input->post('date_naissance');
		$genre=$this->input->post('genre');
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$this->load->model("Utilisateurmodel");
		$this->Utilisateurmodel->insert_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp);

		// redirect(base_url('Utilisateur/login'));
	}
	 
	public function login()
	{
		$this->load->view('utilisateur/loginutilisateur');	
	}
	public function verif_login()
	{
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$this->load->model("Utilisateurmodel");
        $verification=$this->Utilisateurmodel->login_utilisateur($mail,$mdp);

		if($verification==null)
		{
			redirect(base_url('Utilisateur/login'));
		}
		else
		{
			session_start();
            $_SESSION['id_utilisateur']=$verification['id_utilisateur'];
			redirect(base_url('Utilisateur/home'));
		}
	}

	public function home()
	{
		$this->load->view('utilisateur/home');
	}

	public function modifier()
	{
		session_start();
		$id=$_SESSION['id_utilisateur'];
		$data['detail']=$this->Utilisateurmodel->get_one_utilisateur($id);
		$this->load->view('utilisateur/modification',$data);
	}

	public function modifier_trait()
	{
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$date_naissance=$this->input->post('date_naissance');
		$genre=$this->input->post('genre');
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		session_start();
		$id=$_SESSION['id_utilisateur'];
		$this->load->model('Utilisateurmodel');
		$this->Utilisateurmodel->modification_trait_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp,$id);
		redirect(base_url('Utilisateur/profil'));
	}

	public function profil()
	{
		session_start();
		$id=$_SESSION['id_utilisateur'];
		$data['detail']=$this->Utilisateurmodel->get_one_utilisateur($id);
		$this->load->view('utilisateur/profil',$data);
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url('utilisateur/loginutilisateur'));
	}
}
