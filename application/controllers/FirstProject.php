<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstProject extends CI_Controller {

	public function bonjour($pseudo='')
	{
		echo 'Salut à toi : '. $pseudo. '<br/>'; 
	}		
	public function aurevoir($pseudo='')
	{
		echo 'Aurevoir à toi : '. $pseudo. '<br/>'; 
		echo 'Variable id : '. $this->input->get('id'); 
	}		
    public function manger($plat='',$boisson='')
    {
        echo 'Voici votre menu : <br/> ';
        echo $plat.'<br/>';
        echo $boisson.'<br/>';
        echo 'Bon appetit !';
    }
    public function sous_rep(){
        $this->load->view('utilisateur/profil');
    }
}
