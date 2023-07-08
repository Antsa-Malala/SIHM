<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    public function customer_list()
    {
        $data=array();
        $i=0;
        $query=$this->db->query('SELECT * FROM customer_list');
        foreach($query->result_array() as $row)
        {
            $data[$i]=$row;
            $i++;
        }
        return $data;
    }
    public function getClient($id='')
    {
        $sql="SELECT * FROM customer_list where ID=%s";
        $sql=sprintf($sql,$this->db->escape($id));
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }
    public function getName($name='')
    {
        $name=str_replace('%20', ' ', $name);
        $sql="SELECT * FROM customer_list where name LIKE '%s'";
        $sql=sprintf($sql,'%'.$name.'%');
        $query=$this->db->query($sql);
        $row=$query->row_array();
        return $row;
    }

    public function insertion($firstname='',$lastname='',$my_table='')
    {
       $sql="INSERT INTO %s (first_name,last_name) VALUES (%s,%s)";
       $sql=sprintf($sql,$my_table,$this->db->escape($firstname),$this->db->escape($lastname));
       $this->db->query($sql);
       echo $this->db->affected_rows();
    }
}
