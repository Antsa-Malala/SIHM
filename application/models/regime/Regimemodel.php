<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regimemodel extends CI_Controller {

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
    public function get_all_regime()
    {
		$query = $this->db->query("select * from regime");
		$result = array();
		foreach($query->result_array() as $row)
		{
			array_push($result,$row);
		}
		return $result;
    }

    public function insert_regime($poids,$azo_very)
    {
		$sql="insert into regime values (null,%s,%s)";
		$sql=sprintf($sql,$this->db->escape($poids),$this->db->escape($azo_very));
		$query=$this->db->query($sql);
    }
	
	public function insert_regime_achetee($id_utilisateur,$id_regime)
	{
		$sql="insert into regime_achete values (%s,%s,now())";
		$sql=sprintf($sql,$this->db->escape($id_utilisateur),$this->db->escape($id_regime));
		$query=$this->db->query($sql);
	}

	public function get_nombre_regime_achetee()
	{
		$query = $this->db->query("select COUNT(id_utilisateur) as nombre , id_regime from regime_achete GROUP by id_regime");
		$result = array();
		foreach($query->result_array() as $row)
		{
			array_push($result,$row);
		}
		return $result;
	}

	public function get_regime_achetee_par_client($id_utilisateur)
	{
		$query = $this->db->query("select * from regime_achete where id_utilisateur=%s");
		$query=sprintf($query,$this->db->escape($id_utilisateur));
		$result = array();
		foreach($query->result_array() as $row)
		{
			array_push($result,$row);
		}
		return $result;
	}

	public function get_prix_total_one_regime($id_regime)
	{
		$query = $this->db->query("select SUM(prix) as prix_total from regime_plat join plat on regime_plat.id_plat=plat.id_plat where id_regime=%s");
		$query=sprintf($query,$this->db->escape($id_regime));
		$result = null;
		foreach($query->result_array() as $row)
		{
			$result=$row;
		}
		return $result;	
	}

}
