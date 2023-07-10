<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Codemodel extends CI_Model{
    
        public function get_disponibilite_code($code)
        {
            $sql="select * from code where code=%s and etat>=5";
            $sql=sprintf($sql,$this->db->escape($code));
            $query=$this->db->query($sql);

            $result = null;

            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            
            return $result;
        }

        public function update_to_attente_code($code)
        {
            $sql="update code set etat=5 where code=%s";
            $sql=sprintf($sql,$this->db->escape($code));
            $this->db->query($sql);
        }

        public function update_to_lany_code($code)
        {
            $sql="update code set etat=0 where code=%s";
            $sql=sprintf($sql,$this->db->escape($code));
            $this->db->query($sql);
        }
    }
    
    
?>
