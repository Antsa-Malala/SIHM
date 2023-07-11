<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Utilisateurmodel extends CI_Model{
    
        public function insert_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp)
        {
            $sql="insert into utilisateur values (null,%s,%s,%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($date_naissance),$this->db->escape($genre),$this->db->escape($mail),$this->db->escape($mdp));
            $this->db->query($sql);
        }

        public function login_utilisateur($mail,$mdp)
        {
            $sql="select * from utilisateur where mail LIKE %s and mdp LIKE %s";
            $sql=sprintf($sql,$this->db->escape($mail),$this->db->escape($mdp));
            $query=$this->db->query($sql);
            // echo $sql;
            $result = null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            
            return $result;
        }

        public function get_one_utilisateur($id)
        {
            $sql="select * from utilisateur where id_utilisateur=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            // echo $sql;
            $query=$this->db->query($sql);

            $result = null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }

            return $result;
        }

        public function get_genre($int){
            if($int == 1 )
                return "Homme";
            return "Femme";
        }

        public function get_utilisateur_poids($id){
            $query = $this->db->get_where("poids" , array("id_utilisateur" => $id , "date_fin" => null));
			$result = null;
			$result_array = $query->result_array();
            foreach( $result_array as $row){
                $result = $row;
            }
            return $result;
        }
        public function get_utilisateur_taille($id){
            $query = $this->db->get_where("taille" , array("id_utilisateur" => $id , "date_fin" => null));
			$result = null;
			$result_array = $query->result_array();
            foreach( $result_array as $row){
                $result = $row;
            }
            return $result;
        }

        public function insert_taille_utilisateur($taille,$id)
        {
            $sql="update taille set date_fin=now() where id_utilisateur=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $this->db->query($sql);

            $sql="insert into taille values (%s,%s,now(),null)";
            $sql=sprintf($sql,$this->db->escape($id),$this->db->escape($taille));
            $this->db->query($sql);
        }

        public function insert_poids_utilisateur($poids,$id)
        {
            $sql="update poids set date_fin=now() where id_utilisateur=%s";
            $sql=sprintf($sql,$this->db->escape($id));
            $this->db->query($sql);

            $sql="insert into poids values (%s,%s,now(),null)";
            $sql=sprintf($sql,$this->db->escape($id),$this->db->escape($poids));
            $this->db->query($sql);
        }

        public function modification_trait_utilisateur($nom,$prenom,$mail,$mdp,$taille,$poids,$id)
        {
            $sql="update utilisateur set nom=%s,prenom=%s,mail=%s,mdp=%s where id_utilisateur=%s";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($mail),$this->db->escape($mdp),$this->db->escape($id));
            echo $sql;
            $this->db->query($sql);

            $this->insert_taille_utilisateur($taille,$id);
            
            $this->insert_poids_utilisateur($poids,$id);
        }

        public function get_all_utilisateur()
        {
            $sql="select * from utilisateur";
            $query = $this->db->query($sql);
            $result = array();
            foreach($query->result_array() as $row)
            {
                array_push($result,$row);
            }
            return $result;
        }
        public function get_objectif_now_utilisateur($id)
        {
            $sql="select * from objectif where id_utilisateur=%s and date_fin is null";
            $sql=sprintf($sql,$this->db->escape($id));
            //echo $sql;
            $query=$this->db->query($sql);

            $result=null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }

            return $result;
        }
    }
    
    
?>
