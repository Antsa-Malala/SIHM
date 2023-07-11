<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Caisse_model extends CI_Model{

        public function verification_caisse($code)
        {
            $sql="select * from code where code=%s and etat=1";
            $sql=sprintf($sql,$this->db->escape($code));
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
