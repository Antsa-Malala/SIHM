<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	public function index()
	{
      redirect('Utilisateur/profil');
	}		
	public function profil()
    {
        $this->load->view('profil');
    }
}
?>