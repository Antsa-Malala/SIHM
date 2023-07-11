<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	 
	public function __construct(){
        parent::__construct();
		$this->load->model("utilisateur/Utilisateurmodel" , "utilisateur");
		$this->load->model("statistique/Regime_vendu" , "vendu");
		$this->load->model('admin/Admin_model' , 'Adminmodel');
		$this->load->model("regime/Regimemodel" , "regime");
	}
	public function login()
	{
		$this->load->view('admin/Login_admin');	
	}
	public function verif_login()
	{
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
        $verification=$this->Adminmodel->login_admin($mail,$mdp);

		if($verification==null)
		{
			redirect(site_url('utilisateur/login'));
		}
		else
		{
			redirect(site_url('admin/home'));
		}
	}

	public function home()
	{
		$lst = $this->regime->get_nombre_regime_achetee();
		$data['title'] = "Tableau de Bord";
		$data['body'] = "admin/tableau_de_bord";
		$data['nbruser'] = count($this->utilisateur->get_all_utilisateur());
		$data['regimevendu'] = $lst;
		$data['year'] = $this->vendu->get_all_year();
		$data['sold'] = $this->vendu->get_all_sold_through_the_year();
		$nbr = 0;
		foreach( $lst as $elt){
			$nbr += $elt['nombre'];
		}
		$data['nbr'] = $nbr;
		$this->load->view('template/back-office/index' , $data);
	}

    public function get_all_utilisateur()
    {
        $data['all_utilisateur']=$this->utilisateur->get_all_utilisateur();
        $this->load->view('utilisateur/liste_all',$data);
    }
}
