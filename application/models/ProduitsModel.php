<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProduitsModel extends CI_Model
{
    public function listepro()
    { // Charge la librairie 'database'
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT * FROM produits JOIN categories ON categories.Id_categories=produits.Id_categories_pro");

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }

    public function detailpro($id){
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT * FROM produits JOIN categories ON categories.Id_categories=produits.Id_categories_pro  where Id_produits=".$id);

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }
    public function deletpro($id){
        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
    }

public function tricroi(){
    $this->load->database();

    // Exécute la requête
    $results = $this->db->query("SELECT * FROM produits JOIN categories ON categories.Id_categories=produits.Id_categories_pro  ORDER BY pro_pri_achat ASC");

    // Récupération des résultats
    $aListe = $results->result();
    return $aListe;
}
    public function tridecroi(){
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT * FROM produits JOIN categories ON categories.Id_categories=produits.Id_categories_pro  ORDER BY pro_pri_achat DESC");

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }

    public function nouveau(){
        $this->load->database();

        // Exécute la requête
        $results = $this->db->query("SELECT * FROM produits JOIN categories ON categories.Id_categories=produits.Id_categories_pro  ORDER BY pro_date_ajou DESC");

        // Récupération des résultats
        $aListe = $results->result();
        return $aListe;
    }
    public function editpro($id,$data){
        $this->load->database();
            $this->db->where('Id_produits', $id);
            $this->db->update('produits', $data);
        }


    public function createpro($data)
    {
        $this->load->database();

        // Définir des valeurs pour les insertions et insérér  les données à l'aide de CodeIgniters Active Class
        // Utilise set() au lieu de passer un tableau de données directement à l'insert
        // Les valeurs sont échappées automatiquement par le système, empêchant que ces données soient vues comme du code.
        // Empêche les attaques XSS (Cross-site scripting)
        $this->db->set($data);
        return $this->db->insert('produits', $data);

    }
}
