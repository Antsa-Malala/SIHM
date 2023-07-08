<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_list extends CI_Controller {
    function liste()
    {
        $this->load->model('Model');
        $title = 'Liste des clients';
        $description = 'List of customers';
        $keywords = 'les, mots, clés, de, la, page';
        $contents = 'List';
        $client=$this->Model->customer_list();
        $donnees = array(
            'title'=> $title,
            'description' => $description,
            'keywords' => $keywords,
            'contents' => $contents,
            'client' => $client
        );
        $this->load->view('templates/template',$donnees);
    }
}