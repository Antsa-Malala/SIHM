<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 
	public function login()
	{
		$this->load->view('admin/loginadmin');	
	}
	public function verif_login()
	{
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$this->load->model('Adminmodel');
        $verification=$this->Adminmodel->login_admin($mail,$mdp);

		if($verification==null)
		{
			redirect(base_url('Utilisateur/login'));
		}
		else
		{
			redirect(base_url('Admin/home'));
		}
	}

	public function home()
	{
		$this->load->view('admin/home');
	}

    public function get_all_utilisateur()
    {
        $this->load->model('Utilisateurmodel');
        $all_utilisateur=$this->Utilisateurmodel->get_all_utilisateur();
        $this->load->view('utilisateur/liste_all',$data);
    }
}
