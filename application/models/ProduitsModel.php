<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProduitsModel extends CI_Model
{
    public function listepro()
    { // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT * FROM produits");

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }
}