<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Caisse_model extends CI_Model{
        public function insert_rechargement($id_utilisateur,$id_code)
        {
            $sql="insert into rechargement values (%s,%s,now())";
            $sql=sprintf($sql,$this->db->escape($id_utilisateur),$this->db->escape($id_code));
            $this->db->query($sql);
        }
    }
    
?>
