<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Objectifmodel extends CI_Model{

        public function insert_objectif($id_utilisateur,$objectif,$valeur_kg)
        {
            $sql="insert into objectif values (%s,%s,now(),null,%s)";
            $sql=sprintf($sql,$this->db->escape($id_utilisateur),$this->db->escape($objectif),$this->db->escape($valeur_kg));
            $query=$this->db->query($sql);
        }
    }
    
?>
