<?php
    //defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Utilisateurmodel extends CI_Model{
    
        public function insert_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp)
        {
            $sql="insert into utilisateur values (null,%s,%s,%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($date_naissance),$this->db->escape($genre),$this->db->escape($mail),$this->db->escape($mdp));
            $this->db->query($sql);
            redirect(base_url('Loginutilisateur/login_page'));
        }
    }
    
    
?>
