<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Model
{
    public function user($mail)
    {
        $this->load->helper('form', 'url');
        // Charge la librairie 'database'
        // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        //$results = $this->db->query("SELECT * FROM clients  where cli_mail ='".$mail."'");
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->where('cli_mail', $mail);
        $results = $this->db->get();

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }
    public function inseruser($use){

            $this->db->insert('clients', $use);
    }
    public function coef($mail)
    {
        $this->load->helper('form', 'url');
        // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        //$results = $this->db->query("SELECT cli_coefficient FROM clients  where cli_mail ='".$mail."'");
        $this->db->select('cli_coefficient');
        $this->db->from('clients');
        $this->db->where('cli_mail', $mail);
        $results = $this->db->get();

        // Récupération des résultats
        $coeff = $results->result();
        return $coeff;
    }




}