<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

	public function fonction()
	{
       echo("Contact");
	}	
	public function mapiasa_helper()
	{
		$this->load->helper('MyHelper');
		ma_fonction("Antsa");
	}	
	
}
