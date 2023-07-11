<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	 
	public function login()
	{
		$this->load->view('admin/Login_admin');	
	}
	public function verif_login()
	{
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$this->load->model('admin/Admin_model' , 'Adminmodel');
        $verification=$this->Adminmodel->login_admin($mail,$mdp);

		if($verification==null)
		{

			redirect(base_url('utilisateur/login'));
		}
		else
		{
			redirect(base_url('admin/home'));
		}
	}

	public function home()
	{
		$data['title'] = "Tableau de Bord";
		$data['body'] = "admin/tableau_de_bord";
		$this->load->view('template/back-office/index' , $data);
	}

    public function get_all_utilisateur()
    {
        $this->load->model('utilisateur/Utilisateurmodel','Utilisateurmodel');
        $data['all_utilisateur']=$this->Utilisateurmodel->get_all_utilisateur();
        $this->load->view('utilisateur/liste_all',$data);
    }
}
