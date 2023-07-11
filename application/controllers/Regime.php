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

    public function get_combinaison($poids)
    {
        $tableau = array(1,2,4,8);
        $membres_volou=$tableau[0];
        $result=array();
        for($i=0;$i<count($tableau);$i++)
        {
            for($a=$i+1;$a<count($tableau);$a++)
            {
                if($membres_volou+$tableau[$a]==$poids)
                {
                    array_push($result,$tableau[$a]);
                    return $result;
                }
            }
            $membres_volou=$membres_volou+$tableau[$i];
            array_push($result,$tableau[$i]);
        }
    }

    public function insert_regime_achetee_trait()
    {
		$id_regime=$this->input->post('id_regime');
        session_start();
        $id_utilisateur=$_SESSION['id_utilisateur'];
        $this->load->model('regime/Regimemodel','Regimemodel');
        $this->Regimemodel->insert_regime_achetee($id_utilisateur,$id_regime);
        redirect(base_url('Regime/select_all'));
    }

    public function get_nombre_regime_achetee_trait()
    {
        $this->load->model('regime/Regimemodel','Regimemodel');
        $result=$this->Regimemodel->get_nombre_regime_achetee();
        return $result;
    }

}
