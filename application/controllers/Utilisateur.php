<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

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

		redirect(base_url('Utilisateur/login'));
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
			redirect(site_url('Utilisateur/login'));
		}
		else{
			redirect(site_url('Utilisateur/home'));
		}
	}

	public function home()
	{
		$id = $_SESSION['id_utilisateur'];
		$data['title'] = "Profil";
		$data['user'] = $this->Utilisateurmodel->get_one_utilisateur($id);
		$data['poids'] = $this->Utilisateurmodel->get_utilisateur_poids($id);
		$data['taille'] = $this->Utilisateurmodel->get_utilisateur_taille($id);
		$data['genre'] = $this->Utilisateurmodel->get_genre($data['user']['genre']);
		$data['objectif'] = $this->get_objectif();
		$data['action'] = $this->Objectifmodel->get_lose_or_gain($data['objectif']['objectif']);
		$data['body'] = 'utilisateur/home';
		$this->load->view('template/index' , $data);
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
		$id=$_SESSION['id_utilisateur'];
		$this->Utilisateurmodel->modification_trait_utilisateur($nom,$prenom,$mail,$mdp,$id);
		redirect(site_url('Utilisateur/home'));
	}

	public function profil()
	{
		$id=$_SESSION['id_utilisateur'];
		$data['detail']=$this->Utilisateurmodel->get_one_utilisateur($id);
		$this->load->view('utilisateur/profil',$data);
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url('utilisateur/loginutilisateur'));
	}

	public function get_objectif()
	{
		$id=$_SESSION['id_utilisateur'];
		$data = $this->Utilisateurmodel->get_objectif_now_utilisateur($id);
		return $data;
	}
}
