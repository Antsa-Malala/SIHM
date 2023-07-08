<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fiche_Client extends CI_Controller {

	public function affiche($id='')
	{
        $this->load->model('Model');
		$title = 'Fiche';
        $description = 'Fiche client';
        $keywords = 'les, mots, clés, de, la, page';
        $contents = 'Fiche';
        $client=$this->Model->getClient($id);
        $donnees = array(
            'title'=> $title,
            'description' => $description,
            'keywords' => $keywords,
            'contents' => $contents,
            'client'=>$client
        );
        $this->load->view('templates/template',$donnees);

	}		
	public function affiche_name($name='')
	{
        $this->load->model('Model');
		$title = 'Fiche';
        $description = 'Fiche client';
        $keywords = 'les, mots, clés, de, la, page';
        $contents = 'Fiche';
        $client=$this->Model->getName($name);
        $donnees = array(
            'title'=> $title,
            'description' => $description,
            'keywords' => $keywords,
            'contents' => $contents,
            'client'=>$client
        );
        $this->load->view('templates/template',$donnees);

	}		
}
