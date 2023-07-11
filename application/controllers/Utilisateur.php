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
	public function __construct(){
        parent::__construct();
		session_start();
		$this->load->model('utilisateur/Utilisateurmodel','Utilisateurmodel');
		$this->load->model("objectif/Objectifmodel" , 'Objectifmodel');

	}
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
		$this->Utilisateurmodel->insert_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp);

		redirect(site_url('Objectif/insert_objectif'));
	}
	 
	public function login()
	{
		$this->load->view('utilisateur/Login_utilisateur');	
	}
	public function verif_login()
	{
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
        $verification=$this->Utilisateurmodel->login_utilisateur($mail,$mdp);

		if($verification==null){
			redirect(base_url('Utilisateur/login'));
		}
		else{
            $_SESSION['id_utilisateur']=$verification['id_utilisateur'];
			$data['title'] = "Profil";
			$data['user'] = $this->Utilisateurmodel->get_one_utilisateur($_SESSION['id_utilisateur']);
			$data['poids'] = $this->Utilisateurmodel->get_utilisateur_poids($_SESSION['id_utilisateur']);
			$data['taille'] = $this->Utilisateurmodel->get_utilisateur_taille($_SESSION['id_utilisateur']);
			$data['genre'] = $this->Utilisateurmodel->get_genre($data['user']['genre']);
			$data['objectif'] = $this->get_objectif();
			$data['action'] = $this->Objectifmodel->get_lose_or_gain($data['objectif']['objectif']);
			$data['body'] = 'utilisateur/home';
			$this->load->view('template/index' , $data);
		}
	}

	public function home()
	{
		$this->load->view('utilisateur/home');
	}

	public function modifier()
	{
		$id=$_SESSION['id_utilisateur'];
		$data['title'] = "Update Profil";
		$data['body'] = 'utilisateur/modifier_profil';
		$data['detail']=$this->Utilisateurmodel->get_one_utilisateur($id);
		$data['poids'] = $this->Utilisateurmodel->get_utilisateur_poids($id);
		$data['taille'] = $this->Utilisateurmodel->get_utilisateur_taille($id);
		$this->load->view('template/index',$data);
	}

	public function modifier_trait()
	{
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		session_start();
		$id=$_SESSION['id_utilisateur'];
		$this->Utilisateurmodel->modification_trait_utilisateur($nom,$prenom,$mail,$mdp,$id);
		redirect(site_url('Utilisateur/profil'));
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
		redirect(site_url('utilisateur/loginutilisateur'));
	}

	public function get_objectif()
	{
		$id=$_SESSION['id_utilisateur'];
		$data = $this->Utilisateurmodel->get_objectif_now_utilisateur($id);
		return $data;
	}
}
