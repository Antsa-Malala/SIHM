<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {

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
    public function select_all()
    {
        $this->load->model('regime/Regimemodel','Regimemodel');
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
        $this->load->model('regime/Regimemodel','Regimemodel');
        $this->Regimemodel->insert_regime($poids,$azo_very);

        redirect(base_url('Regime/select_all'));
    }
}
