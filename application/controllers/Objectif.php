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
    public function insert_objectif()
    {
		$this->load->view('objectif/modifier_objectif');
    }

    public function insert_objectif_trait()
    {
        session_start();
        $id_utilisateur=$_SESSION['id_utilisateur'];
		$objectif=$this->input->post('objectif');
		$valeur=$this->input->post('valeur');
        $this->load->model('objectif/Objectifmodel','Objectifmodel');
        $this->Objectifmodel->insert_objectif($id_utilisateur,$objectif,$valeur);

        redirect(base_url('Utilisateur/home'));
    }
}
