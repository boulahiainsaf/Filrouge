<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Saisir extends CI_Model
{
    public function insersaisir($data)
    {
        $this->db->insert('saisir', $data);
    }
}