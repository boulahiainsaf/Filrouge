<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Model
{
    public function idemp($nom)
    {
        $this->load->helper('form', 'url');
        // Charge la librairie 'database'
        // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT Id_employees FROM employees  where emp_nom ='".$nom."'");

        // Récupération des résultats
        $id = $results->result();
        return $id;
    }

}
