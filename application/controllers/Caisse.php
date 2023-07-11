<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caisse extends CI_Controller {

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
    public function rechargement()
    {
        $this->load->view('code/pagerechargement',$data);
    }

    public function rechargement_code()
    {
		$code=$this->input->post('code');
		$this->load->model('code/Codemodel','Codemodel');
        $is_disponible=$this->Codemodel->get_disponibilite_code($code);
        if($is_disponible==null)
        {
            redirect(base_url('Caisse/rechargement'));
        }
        $this->Codemodel->update_to_attente_code($code);
        redirect(base_url('Utilisateur/profil'));
    }

    public function liste_code_attente()
    {
        $this->load->model('code/Codemodel','Codemodel');
        $data['all_code']=$this->Codemodel->get_liste_code_attente();
        $this->load->view('code/liste_code_attente',$data);
    }

    public function validation_code_trait()
    {
		$id_code=$this->input->get('id_code');
        $this->load->model('code/Codemodel','Codemodel');
        $this->Codemodel->update_to_lany_code($id_code);
        redirect(base_url('Caisse/liste_code_attente'));
    }

    public function insert_code()
    {
        $this->load->model('code/Codemodel','Codemodel');
        $data['code']=$this->Codemodel->get_all_code();
        $this->load->view('caisse/rechargement',$data);
    }

    public function insert_code_trait()
    {
        $code=$this->input->get('code');
        $somme=$this->input->get('somme');
        $this->load->model->model('code/Codemodel');
        $this->Codemodel->insert_code($code,$somme);
        redirect(base_url('Caisse/liste_code_attente'));        
    }
}
