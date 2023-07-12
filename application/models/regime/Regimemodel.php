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
		$query = $this->db->query("SELECT  rg.id_regime , rg.poids , rg.azo_perdu , pl.nom_plat , pl.disponibilite , pl.prix  , act.description_activite from regime_plat rpl
			JOIN regime rg 
			ON rpl.id_regime = rg.id_regime
			JOIN plat pl
			ON rpl.id_plat = pl.id_plat
			JOIN activite act
			ON rpl.id_activite = act.id_activite
		");
		$results = array();
		foreach( $query->result_array() as $row){
			$results[] = $row; 
		}
		return $results;
	}
	public function get_details_of_one_regime($id){
		$lst = $this->get_details_regime();
		$results = array();
		foreach( $lst as $row){
			if($row['id_regime'] == $id)
				$results[] = $row; 
		}
		return $results;
	}
	public function get_regime_achetee_par_client($id_utilisateur)
	{
		$query="select * from regime_achete where id_utilisateur=%s";
		$query=sprintf($query,$this->db->escape($id_utilisateur));	
		$query = $this->db->query($query);
		$result = array();
		foreach($query->result_array() as $row)
		{
			array_push($result,$row);
		}
		return $result;
	}
    public function get_combinaison($poids)
    {
		// echo $poids;
        $tableau = array(1,2,4,8);
        /*$membres_volou=$tableau[0];
        $result=array();
        array_push($result,$membres_volou);
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
        }*/

		$result=array();
		$premier=0;
		if($tableau[0]==$poids)
		{
			$result=array($tableau[0]);
			return $result;
		}
		for($i=0;$i<count($tableau);$i++)
		{
			array_push($result,$tableau[$i]);
			$premier=$premier+$tableau[$i];
			for($a=$i+1;$a<count($tableau);$a++)
			{
				if($premier+$tableau[$a]==$poids)
				{
					array_push($result,$tableau[$a]);
					return $result;
				}
				else if($tableau[$a]==$poids)
				{
					$result=array($tableau[$a]);
					return $result;
				}
			}
		}
    }
	public function get_one_regime_by_poids($poids){
		$query = $this->db->get_where("regime" , array( "poids" => $poids));
		$result = null;
		foreach( $query->result_array() as $row){
			$result = $row;
		}
		return $result;
	}

	public function get_regime_ok($poids , $objectif){
		$lst = $this->get_combinaison($poids);
		$result = array();
		$tab = array();
		foreach($lst as $elt){
			$tab = $this->get_all_regime_by_poids($elt , $tab);
		}
		$int = "";
		if($objectif == 0){

			$int = "Perdre";
		}else{
			$int = "Gagner";
		}
		echo $objectif;
		foreach($tab as $temp){
			if($temp['azo_perdu'] == $objectif){
				$result[] = array(
					"id_regime" => $temp['id_regime'],
					"poids" => $temp['poids'],
					"prix" => $this->get_prix_total_one_regime($temp['id_regime']),
					"objectif" => $int
				);
			}
		} 

		return $result;
	}

	public function get_all_regime_by_poids($id,$tab) {
		$query = $this->db->get_where("regime" , array( "poids" => $id));
		foreach( $query->result_array() as $row){
			$tab[] = $row;
		}
		return $tab;
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
		$query = "select SUM(prix) as prix_total from regime_plat join plat on regime_plat.id_plat=plat.id_plat where regime_plat.id_regime LIKE %s";
		$query=sprintf($query,$this->db->escape($id_regime));
		$query = $this->db->query($query);
		$result = null;
		foreach($query->result_array() as $row)
		{
			$result=$row;
		}
		return $result['prix_total'];	
	}
}
