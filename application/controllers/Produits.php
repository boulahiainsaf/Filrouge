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
if (isset($this->session->admine)) {


    // Appel de la vue avec transmission du tableau
    $this->load->view('header');
    $this->load->view('liste', $aView);
    $this->load->view('footer');
}else{
    $this->load->view('header');
    $this->load->view('liste1', $aView);
    $this->load->view('footer');
}
}

public function prodetail(){
    $idd = $this->uri->segment(3);
    $this->load->model('ProduitsModel');
    $aListe = $this->ProduitsModel->detailpro($idd);
    $bDet["Produit_detail"] = $aListe;
    $this->load->view('header');
    $this->load->view('detail', $bDet);
    $this->load->view('footer');
}
    public function liste1()
    {
        $this->load->model('ProduitsModel');
        $aListe = $this->ProduitsModel->listepro();

        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
        $bView["liste1_produits"] = $aListe;
        // Appel de la vue avec transmission du tableau
        $this->load->view('header');
        $this->load->view('liste1', $bView);
        $this->load->view('footer');
    }
    public function confiDelet(){
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $aListe = $this->ProduitsModel->detailpro($idd);
        $bDet["Delet_pro"] = $aListe;

        $this->load->view('header');
        $this->load->view('deletPro', $bDet);
        $this->load->view('footer');


    }
    public function supProduits(){
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $aListe = $this->ProduitsModel->deletpro($idd);
        redirect('Produits/liste');

    }

    public function tri(){
        $this->load->database();
        $res=$this->input->post();
       if($res['sujet']=='croissant'){

           $this->load->model('ProduitsModel');
           $aListe = $this->ProduitsModel->tricroi();


           // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
           $aView["liste_produits"] = $aListe;

           // Appel de la vue avec transmission du tableau
           $this->load->view('header');
           $this->load->view('liste', $aView);
           $this->load->view('footer');


       }else if ($res['sujet']=='decroissant'){
           $this->load->model('ProduitsModel');
           $aListe = $this->ProduitsModel->tridecroi();


           // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
           $aView["liste_produits"] = $aListe;

           // Appel de la vue avec transmission du tableau
           $this->load->view('header');
           $this->load->view('liste', $aView);
           $this->load->view('footer');
       }else{
           $this->load->model('ProduitsModel');
           $aListe = $this->ProduitsModel->nouveau();


           // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue
           $aView["liste_produits"] = $aListe;

           // Appel de la vue avec transmission du tableau
           $this->load->view('header');
           $this->load->view('liste', $aView);
           $this->load->view('footer');
       }

    }
    public function modif(){
        $this->load->helper('form','url');
        $idd = $this->uri->segment(3);
        $this->load->model('ProduitsModel');
        $aListe = $this->ProduitsModel->detailpro($idd);
        $bDet["Produit_detail"] = $aListe;
        $this->load->model('Categories');
        $catliste = $this->Categories->listecat();
        $catlist=$catliste->result();
        $bDet["liste_categories"] = $catlist;
        $this->load->view('header');
        $this->load->view('edit',$bDet);
        $this->load->view('footer');
    }

    public function update()
    {
        // Charger form helper
        $this->load->helper('form','url');
        $id = $this->uri->segment(3);
        $nom=$this->session->nom;
        $this->load->model('Employee');
        $aemp = $this->Employee->idemp($nom);

        // Charger form_validation library
        $this->load->library('form_validation');
        $saisi= array(
            'Id_produits'=>$id,
             'Id_employees'=>$aemp[0]->Id_employees,
             'sai_date'=>date("y-m-d H:i"),
            'sai_description'=>$this->input->post('sai_description')
        );
        var_dump($saisi);


        $data = array(

            'pro_lib_court' => $this->input->post('pro_lib_court'),
            'pro_lib_long' => $this->input->post('pro_lib_long'),
            'pro_fou_ref' => $this->input->post('pro_fou_ref'),
            'pro_photo' => $this->input->post('pro_photo'),
            'pro_pri_achat' => $this->input->post('pro_pri_achat'),
            'pro_stock' => $this->input->post('pro_stock'),
            'pro_bloque' => $this->input->post('pro_bloque'),

        );





        // --!! Commenté car XSS_clean ne doit être appliqué qu'aux données de sortie !!--
        // Charger security helper pour éviter l'erreur xss_clean
        // (xss_clean n'est pas dans la bibliothèque form_validation)
        // $this->load->helper('security');


        $this->form_validation->set_rules('pro_lib_court', 'Libellé court', 'required');

        // libellé long : requis
        $this->form_validation->set_rules('pro_lib_long', 'Libellé long', 'required');

        // Référence du fournisseur : requis|caractères alphanumériques
        $this->form_validation->set_rules('pro_fou_ref', 'Référence du fournisseur', 'required|alpha_numeric');

        // Format de photos : requis
        $this->form_validation->set_rules('pro_photo', 'Photo du produit', 'required');

        // Prix d'achat : requis|doit être un entier ou un nombre à deux décimales
        $this->form_validation->set_rules('pro_pri_achat', "Prix d`achat", 'required|regex_match[/^([0-9]+.?[0-9]{2})$/]');

        // Stock : requis|numériques
        $this->form_validation->set_rules('pro_stock', 'Stock', 'required|numeric');

        // ID de pro_bloque : requis
        $this->form_validation->set_rules('pro_bloque', 'Produit bloqué', 'required');

        // Description des modification : requis
        $this->form_validation->set_rules('sai_description', 'Description des modifications', 'required');
        // verifier la validation
        // Si non-valide, charger le vue create
        // Si valide, envoyer les données au modèle
        if ($this->form_validation->run() === FALSE) {
            $this->load->helper('form','url');
            $id = $this->uri->segment(3);
            $this->load->model('ProduitsModel');
            $aListe = $this->ProduitsModel->detailpro($id);
            $bDet["Produit_detail"] = $aListe;
            $this->load->model('Categories');
            $catliste = $this->Categories->listecat();
            $catlist=$catliste->result();
            $bDet["liste_categories"] = $catlist;

            $this->load->view('header');
            $this->load->view('edit', $bDet,$data);
            $this->load->view('footer');

        } else {

            $this->load->model('ProduitsModel');
            $this->ProduitsModel->editpro($id, $data);

            $this->load->model('saisir');
            $this->saisir->insersaisir( $saisi);

           redirect('Produits/liste');
        }


    }

    public function create()
    {
        $this->load->view('header');
        $this->load->view('create');
        $this->load->view('footer');
    }

    public function createProd()
    {

        $data = array(
            'pro_lib_court' => $this->input->post('pro_lib_court'),
            'pro_lib_long' => $this->input->post('pro_lib_long'),
            'pro_fou_ref' => $this->input->post('pro_fou_ref'),
            'pro_photo' => $this->input->post('pro_photo'),
            'pro_pri_achat' => $this->input->post('pro_pri_achat'),
            'pro_stock' => $this->input->post('pro_stock'),
            'pro_bloque' => $this->input->post('pro_bloque'),
            'id_fournisseurs_pro' => $this->input->post('id_fournisseurs_pro'),
            'id_categories_pro' => $this->input->post('id_categories_pro')
        );

        // Charger form helper
        $this->load->helper('form');

        // Charger form_validation library
        $this->load->library('form_validation');

<<<<<<< HEAD
        // Charger le modèle
        $this->load->model('ProduitsModel');
=======
>>>>>>> 80589f967b6df014bb3bbe8dcd9c644b5e01650f

        // --!! Commenté car XSS_clean ne doit être appliqué qu'aux données de sortie !!--
        // Charger security helper pour éviter l'erreur xss_clean
        // (xss_clean n'est pas dans la bibliothèque form_validation)
        // $this->load->helper('security');

        // Régles de validation
        // libellé court : requis
        $this->form_validation->set_rules('pro_lib_court', 'Libellé court', 'required');

        // libellé long : requis
        $this->form_validation->set_rules('pro_lib_long', 'Libellé long', 'required');

        // Référence du fournisseur : requis|caractères alphanumériques
        $this->form_validation->set_rules('pro_fou_ref', 'Référence du fournisseur', 'required|alpha_numeric');

        // Format de photos : requis
        $this->form_validation->set_rules('pro_photo', 'Photo du produit', 'required');

        // Prix d'achat : requis|doit être un entier ou un nombre à deux décimales
        $this->form_validation->set_rules('pro_pri_achat', 'Prix d\'achat', 'required|regex_match[/^([0-9]+\.?[0-9]{2})$/]');

        // Stock : requis|numériques
        $this->form_validation->set_rules('pro_stock', 'Stock', 'required|numeric');

        // ID de fournisseur : requis|numériques
        $this->form_validation->set_rules('id_fournisseurs_pro', 'ID du fournisseur', 'required|numeric');

        // Identifiant de catégoris : requis|numériques
        $this->form_validation->set_rules('id_categories_pro', 'ID de catégorie', 'required|numeric');


        // verifier la validation
        // Si non-valide, charger le vue create
        // Si valide, envoyer les données au modèle
        if ($this->form_validation->run() === FALSE) {
<<<<<<< HEAD
            $this->load->view('header1');
            $this->load->view('create', $data);
=======
            $this->load->view('header');
            $this->load->view('create');
>>>>>>> 80589f967b6df014bb3bbe8dcd9c644b5e01650f
            $this->load->view('footer');

        } else {
            $this->load->model('ProduitsModel');
            $this->ProduitsModel->createPro($data);

<<<<<<< HEAD
            $this->load->view('header1');
=======
            $this->load->view('header');
>>>>>>> 80589f967b6df014bb3bbe8dcd9c644b5e01650f
            $this->load->view('accueil');
            $this->load->view('footer');
        }
    }
<<<<<<< HEAD
}
=======
    }
>>>>>>> 80589f967b6df014bb3bbe8dcd9c644b5e01650f
