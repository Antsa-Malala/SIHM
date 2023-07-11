<?php

	class Regime    _vendu extends CI_Model{       
        public $id_plat;
        public $nom_plat;   
        public $disponibilite; 
        public $prix;
		public function insert_plat( $nom_plat , $disponibilite , $prix ){
			$data = array(
				'id_plat' => ('NULL'),
				'nom_plat' => ($nom_plat),
                'disponibilite' => ($disponibilite),
                'prix' => ("prix")
			);
            try{
				$this->db->insert("plat", $data);
			}catch( Exception $exception ){
				throw $exception;
			}
		}

		public function get_all_plat(){
			$query = $this->db->get('plat');
            echo $this->db->last_query($query);
			$results = array();
			$result_array = $query->result_array();
			foreach( $result_array as $row ){
				$plat = new Plat();
				$plat->id_plat = $row["id_plat"];
				$plat->nom_plat = $row["nom_plat"];
				$plat->disponibilite = $row["disponibilite"];
				$plat->nom_plat = $row["nom_plat"];
				$results[] = $plat;
			}
			return $results;
		}

        public function delete_activite( $id ){
            $this->db->delete('activite', array('id_activite' => $id));
		}

        
		public function get_all_plat_dispo(){
            $query = $this->db->get_where('plat', array('diponibilite' => 1));
            echo $this->db->last_query($query);
			$results = array();
			$result_array = $query->result_array();
			foreach( $result_array as $row ){
				$plat = new Plat();
				$plat->id_plat = $row["id_plat"];
				$plat->nom_plat = $row["nom_plat"];
				$plat->disponibilite = $row["disponibilite"];
				$plat->nom_plat = $row["nom_plat"];
				$results[] = $plat;
			}
			return $results;
		}

        public function delete_plat( $id ){
            $this->db->delete('plat', array('id_plat' => $id));
		}
	
	}

?>