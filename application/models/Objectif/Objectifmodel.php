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
            $sql1="update objectif set date_fin = now() where id_utilisateur = %s and date_fin is null";
            $sql1=sprintf($sql1,$this->db->escape($id_utilisateur));
            echo $sql1;
            $query=$this->db->query($sql1);            
            $sql2="insert into objectif values (%s,%s,now(),null,%s)";
            $sql2=sprintf($sql2,$this->db->escape($id_utilisateur),$this->db->escape($objectif),$this->db->escape($valeur_kg));
            echo $sql2;
            $query=$this->db->query($sql2);
        }
        
        public function get_lose_or_gain($int){
            if($int == 0)
                return "Perdre";
            else 
                return "Gagner";
        }

        public function get_by_id_user($id){
            $query = $this->db->get_where("objectif" , array("id_utilisateur" => $id , "date_fin" => null));
            // echo $this->db->last_query();
            $result = null;
            foreach( $query->result_array() as $row){
                $result  = $row;
            }
            return $result;
        }
        
        public function getIMC($id)
        {
            $this->load->model('utilisateur/Utilisateurmodel');
            $poids=$this->Utilisateurmodel->get_utilisateur_poids($id);
            $taille=$this->Utilisateurmodel->get_utilisateur_taille($id);

            $imc=$poids/($taille*$taille);
            return $imc;
        }
    }
    
?>
