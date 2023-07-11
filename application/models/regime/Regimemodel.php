<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regimemodel extends CI_Controller {

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
	public function get_details_regime(){
		$query = $this->db->query("SELECT DISTINCT v.id_regime , SUM(PRIX) as sum , poids , azo_perdu FROM 
		(SELECT  rg.id_regime , rg.poids , rg.azo_perdu , pl.nom_plat , pl.disponibilite , pl.prix  , act.description_activite from regime_plat rpl
			JOIN regime rg 
			ON rpl.id_regime = rg.id_regime
			JOIN plat pl
			ON rpl.id_plat = pl.id_plat
			JOIN activite act
			ON rpl.id_activite = act.id_activite)
		v GROUP BY v.id_regime
		");
		$results = array();
		foreach( $query->result_array() as $row){
			$results[] = $row; 
		}
		return $results;
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

	public function get_one_regime($id){
		$query = $this->db->get_where("regime" , array( "id_regime" => $id));
		$result = null;
		foreach( $query->result_array() as $row){
			$result = $row;
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

>>>>>>> Stashed changes
}
