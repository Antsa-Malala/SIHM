<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function accueil()
	{
        $data=array();
        $data['pseudo']='Rakoto';
        $data['email']='rakoto@mada.com';
        $data['en_ligne']=true;

        $this->load->view('vue',$data);
	}	
        public function vola($vola)
        {
                $this->load->helper('Formater_helper');
                echo formater($vola);
        }
        public function entree($mytable='')
        {
                $this->load->model('news_model');
                $data=array();
                //$this->news_model->acces_base($mytable);
                $this->news_model->base_ligne($mytable);
                /*$data['user_info']=$this->news_model->get_info();
                $this->load->library('layout');
                $this->layout->view('ma_vue',$data);*/
        }	
        public function insertion($first_name='',$last_name='',$mytable='')
        {
                $this->load->model('news_model');
                $this->news_model->insertion($first_name,$last_name,$mytable);
        }	
	
}
