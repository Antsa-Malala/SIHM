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

        public function update_to_lany_code($id_code)
        {
            $sql="update code set etat=0 where id_code=%s";
            $sql=sprintf($sql,$this->db->escape($id_code));
            $this->db->query($sql);
        }

        public function get_liste_code_attente()
        {
            $query = $this->db->query("select somme,nom,code,code.id_code as id_code from code join rechargement on code.id_code=rechargement.id_code join utilisateur on rechargement.id_utilisateur=utilisateur.id_utilisateur where code.etat=5");
            $result = array();
            foreach($query->result_array() as $row)
            {
                array_push($result,$row);
            }
            return $result;
        }

        public function insert_code($code,$somme)
        {
            $sql="insert into code values (null,10,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($code),$this->db->escape($somme));
            $this->db->query($sql);
        }

        public function get_prix_rechargement_par_utilisateur($id_utilisateur)
        {
            $query="select sum(somme) as somme_totale from rechargement join code on rechargement.id_code=code.id_code where id_utilisateur=%s and code.etat=0";
            $query=sprintf($query,$this->db->escape($id_utilisateur));
            $query = $this->db->query($query);
            $result = null;
            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            return $result;
        }

        public function get_all_code()
        {
            $query="select * from code";
            $query = $this->db->query($query);
            $result = array();
            foreach($query->result_array() as $row)
            {
                array_push($result,$row);
            }
            return $result;   
        }

        public function get_by_name($name)
        {
            $result=0;
            $query="select * from code where code=%s";
            $query=sprintf($query,$this->db->escape($name));
            $query = $this->db->query($query);
            foreach($query->result_array() as $row)
            {
                $result=$row;
            }
            return $result;
        }
    }
    
    
?>
