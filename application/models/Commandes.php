<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Commandes extends CI_Model
{
    public function listeCommande()
    {
        { // Charge la librairie 'database'
            $this->load->database();

            // Exécute la requête
            $comme = $this->db->query("SELECT * FROM commandes join clients ON commandes.Id_clients=clients.Id_clients ");

            // Récupération des résultats
            $Cliste = $comme->result();
            return $Cliste;
        }
    }
    public function detailCommande($idcom)
    {
        { // Charge la librairie 'database'
            $this->load->database();

            // Exécute la requête
            $comme = $this->db->query("SELECT * FROM commandes join clients ON commandes.Id_clients=clients.Id_clients where Id_commandes=".$idcom);

            // Récupération des résultats
            $Commande = $comme->result();
            return $Commande;
        }
    }
}