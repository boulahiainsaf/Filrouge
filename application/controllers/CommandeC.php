<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CommandeC extends CI_Controller
{

    public function tousCommande()
    {
        $this->load->model('Commandes');

        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
        $comme["liste_commandes"] = $this->Commandes->listeCommande();
        // Appel de la vue avec transmission du tableau
        $this->load->view('header');
        $this->load->view('affichecommande', $comme);
        $this->load->view('footer');
    }
    public function detailC()
    {$com = $this->uri->segment(3);
        $this->load->model('Commandes');

        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
        $comme["detail_commande"] = $this->Commandes->detailCommande($com);
        // Appel de la vue avec transmission du tableau
        $this->load->view('header');
        $this->load->view('modifCommande', $comme);
        $this->load->view('footer');
    }
}