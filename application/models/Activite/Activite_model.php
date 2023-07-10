<?php

	class Activite extends CI_Model{
		public $id_activite;
		public $description_activite;       

		public function insert_activite( $description ){
			$data = array(
				'id_activite' => ('NULL'),
				'description_activite' => ($description)
			);
            try{
				$this->db->insert("activite", $data);
			}catch( Exception $exception ){
				throw $exception;
			}
		}

		public function get_all_activite(){
			$query = $this->db->get('activite');
            echo $this->db->last_query($query);
			$results = array();
			$result_array = $query->result_array();
			foreach( $result_array as $row ){
				$saleFish = new Activite();
				$saleFish->id_activite = $row["id_activite"];
				$saleFish->description_activite = $row["description_activite"];
				$results[] = $saleFish;
			}
			return $results;
		}

        public function delete_activite( $id ){
            $this->db->delete('activite', array('id_activite' => $id));
		}
	
	}

?>