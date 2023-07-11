<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        session_start();
        $this->load->model('utilisateur/Utilisateurmodel','utilisateur');
        $this->load->model('objectif/Objectifmodel','objectif');
        $this->load->model('regime/Regimemodel','Regimemodel');
    }
    public function select_all()
    {
        $data['all_regime']=$this->Regimemodel->get_all_regime();
        $this->load->view('regime/Show_all',$data);
    }
    
    public function insert()
    {
        $this->load->view('regime/Insert');
    }
    
    public function insert_trait()
    {
        $poids=$this->input->post('poids');
		$azo_very=$this->input->post('azo_very');
        $this->Regimemodel->insert_regime($poids,$azo_very);
        
        redirect(site_url('Regime/select_all'));
    }
    
    public function get_regime_proposition(){
        $id = $_SESSION['id_utilisateur'];
        $objectif = $this->objectif->get_by_id_user($id);
        $proposition = $this->Regimemodel->get_regime_ok($objectif['valeur'] , $objectif['objectif']);
        $data['title'] = "Proposition Regime";
        $data['body'] = "regime/proposition_regime";
        $data['list_regime'] = $proposition;
        $this->load->view("template/front-office/index" , $data);
    }

    public function insert_regime_achetee_trait()
    {
		$id_regime=$this->input->post('id_regime');
        $id_utilisateur=$_SESSION['id_utilisateur'];
        $this->Regimemodel->insert_regime_achetee($id_utilisateur,$id_regime);
        redirect(site_url('Utilisateur/home'));
    }

    public function detail_regime($id){
        $data['title'] = "Details Regime";
        $data['body'] = "regime/details_regime";
        $data['detail'] = $this->Regimemodel->get_details_of_one_regime($id);   
        $data['prix'] = $this->Regimemodel->get_prix_total_one_regime($id);   
        $this->load->view("template/front-office/index",$data);
    }

    public function get_nombre_regime_achetee_trait()
    {
        $result=$this->Regimemodel->get_nombre_regime_achetee();
        return $result;
    }

}
