<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Caisse_model extends CI_Model{

        public function login_admin($mail,$mdp)
        {
            $sql="select * from admin where mail=%s and mdp=%s";
            $sql=sprintf($sql,$this->db->escape($mail),$this->db->escape($mdp));
            $query=$this->db->query($sql);

            $result = null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            
            return $result;
        }
    }
    
?>
