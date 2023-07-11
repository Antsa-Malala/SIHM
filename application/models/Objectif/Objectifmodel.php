<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Objectifmodel extends CI_Model{

        public function insert_objectif($id_utilisateur,$objectif,$valeur_kg)
        {
            $sql="insert into objectif values (%s,%s,now(),null,%s)";
            $sql=sprintf($sql,$this->db->escape($id_utilisateur),$this->db->escape($objectif),$this->db->escape($valeur_kg));
            $query=$this->db->query($sql);
        }
        public function update_objectif($id_utilisateur,$objectif,$valeur_kg)
        {
            $sql1="update objectif set date_fin = now() where id_utilisateur = %s";
            $sql1=sprintf($sql1,$this->db->escape($id_utilisateur));
            echo $sql1;
            // $query=$this->db->query($sql1);            
            $sql2="insert into objectif values (%s,%s,now(),null,%s)";
            $sql2=sprintf($sql2,$this->db->escape($id_utilisateur),$this->db->escape($objectif),$this->db->escape($valeur_kg));
            echo $sql2;
            // $query=$this->db->query($sql2);
        }
        
        public function get_lose_or_gain($int){
            if($int == 0)
                return "Perdre";
            else 
                return "Gagner";
        }
    }
    
?>
