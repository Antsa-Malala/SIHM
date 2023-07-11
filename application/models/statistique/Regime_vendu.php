<?php

	class Regime_vendu extends CI_Model{       
        
		public function get_all_year(){
			$query = "SELECT DISTINCT YEAR(date_achat) as ye FROM regime_Achete ORDER BY ye ASC ";
			// echo $query;
            $query = $this->db->query($query);
			$results = array();
			$result_array = $query->result_array();
			foreach( $result_array as $row ){
				$results[] = $row['ye'];
			}
			return $results;

		}
		public function get_all_sold_through_the_year(){
            $query = "SELECT COUNT(id_regime) as nbr FROM
			regime_achete
			GROUP BY YEAR(date_achat)
			ORDER BY YEAR(date_achat) ASC";
			// echo $query;
            $query = $this->db->query($query);
			$results = array();
			$result_array = $query->result_array();
			foreach( $result_array as $row ){
				$results[] = $row['nbr'];
			}
			return $results;
		}

	}

?>