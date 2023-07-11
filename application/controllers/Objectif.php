<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif extends CI_Controller {

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
		$this->load->model("objectif/Objectifmodel" , "objectif");
	}

	public function insert_objectif()
	{
		$data['title'] = "Insert Objectif";
		$data['body'] = "objectif/insert_objectif";
		$this->load->view('template/front-office/index' , $data);
	}

	public function modifier_objectif()
	{
		$data['title'] = "Modifier Objectif";
		$data['body'] = "objectif/modifier_objectif";
		$this->load->view('template/front-office/index' , $data);
	}

    public function insert_objectif_trait()
    {
        $id_utilisateur=$_SESSION['id_utilisateur'];
		$objectif=$this->input->post('objectif');
		$valeur=$this->input->post('valeur');
        $this->objectif->insert_objectif($id_utilisateur,$objectif,$valeur);
        redirect(site_url('Utilisateur/home'));
    }
    public function update_objectif_trait()
    {
        $id_utilisateur=$_SESSION['id_utilisateur'];
		$objectif=$this->input->post('objectif');
		$valeur=$this->input->post('valeur');
        $this->objectif->update_objectif($id_utilisateur,$objectif,$valeur);
        redirect(site_url('Utilisateur/home'));
    }
}
