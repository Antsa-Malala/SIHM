<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin_model extends CI_Model{
    

        public function login_admin($mail,$mdp)
        {
            $sql="select * from admin where email LIKE %s and mdp LIKE %s";
            $sql=sprintf($sql,$this->db->escape($mail),$this->db->escape($mdp));
            $query=$this->db->query($sql);
            echo $sql;
            $result = null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            
            return $result;
        }

    }
    
    
?>
