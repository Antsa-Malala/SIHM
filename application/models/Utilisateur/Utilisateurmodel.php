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
            $sql="select * from utilisateur where mail=%s and mdp=%s";
            $sql=sprintf($sql,$this->db->escape($mail),$this->db->escape($mdp));
            $query=$this->db->query($sql);

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
            $query=$this->db->query($sql);

            $result = null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }

            return $result;
        }

        public function modification_trait_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp,$id)
        {
            $sql="update utilisateur set nom=%s,prenom=%s,datedenaissance=%s,genre=%s,mail=%s,mdp=%s where id_utilisateur=%s";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($date_naissance),$this->db->escape($genre),$this->db->escape($mail),$this->db->escape($mdp),$this->db->escape($id));
            $this->db->query($sql);
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
            $sql="select * from objectif where id_utilisateur=%s and date_fin=null";
            $sql=sprintf($sql,$this->db->ecape($id));
            $this->db->query($sql);

            $result=null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }

            return $result;
        }
    }
    
    
?>
