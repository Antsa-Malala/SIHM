<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement_Fiche extends CI_Controller {

	public function traitement($id)
	{
      redirect('Traitement_Fiche/profil?id='.$id);
	}		
	public function profil()
    {
        $id=$this->input->get('id');
        redirect(base_url('Fiche_Client/affiche/')."/".$id);
    }
	public function profil_name()
    {
        $name=$this->input->get('name');
        redirect(base_url('Fiche_Client/affiche_name/')."/".$name);
    }
}
?>