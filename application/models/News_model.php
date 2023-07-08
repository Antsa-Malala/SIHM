<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function get_info()
    {
        return array('auteur'=>'Chuck Norris','date'=>'24/07/05','email'=>'email@ndd.fr');
    }
    public function acces_base($my_table)
    {
        $query=$this->db->query('SELECT first_name,last_name FROM '.$my_table);
        foreach($query->result_array() as $row)
        {
            echo $row['first_name'];
            echo $row['last_name'];
        }
    }
    public function base_ligne($my_table)
    {
        $query=$this->db->query('SELECT last_name FROM '.$my_table.' LIMIT 1');
        $row=$query->row_array();
        echo $row['last_name'];
    }
    public function insertion($firstname,$lastname,$my_table)
    {
       $sql="INSERT INTO %s (first_name,last_name) VALUES (%s,%s)";
       $sql=sprintf($sql,$my_table,$this->db->escape($firstname),$this->db->escape($lastname));
       $this->db->query($sql);
       echo $this->db->affected_rows();
    }
}
