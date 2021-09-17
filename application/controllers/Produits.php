<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produits extends CI_Controller
{

    public function accueil()
    {
        // Chargement de la vue accueil

        $this->load->view('header');
        $this->load->view('accueil');
        $this->load->view('footer');
    }

        public function inscri()
        {
            $this->load->view('header');
            $this->load->view('inscription');
            $this->load->view('footer');
    }

public function liste()
{
    $this->load->model('ProduitsModel');
    $aListe = $this->ProduitsModel->listepro();


    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
    $aView["liste_produits"] = $aListe;

    // Appel de la vue avec transmission du tableau
    $this->load->view('header');
    $this->load->view('liste', $aView);
    $this->load->view('footer');
}
}