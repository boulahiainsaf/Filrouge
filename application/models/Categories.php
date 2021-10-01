<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Model
{
    public function listecat()
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('Id_categories_1 != ',0);
        $query  =  $this -> db -> get ();

        return $query;
    }
    public function listecatpar()
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('Id_categories_1 = ',0);
        $query  =  $this -> db -> get ();

        return $query;
    }
}