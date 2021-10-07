<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connect extends CI_Controller
{

    public function verefconnect()
    {
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules("mail", "Email", 'trim|required|valid_email');
        $this->form_validation->set_rules("pass", "password", "required", array("required" => "Le %s doit être obligatoire."));


        //essai
        if ($this->form_validation->run()) {
            $mail = $this->input->post('mail');
            $password = $this->input->post('pass');
            $this->load->model('Clients');
            $b = $this->Clients->user($mail);


            $this->load->model('ProduitsModel');
            $aListe = $this->ProduitsModel->listepro();
            $bView["liste_produits"] = $aListe;
            foreach ($b as $row)
                $buse['user'] = $b;
            if ($b != NULL) {
                if (password_verify($password, $row->cli_mot_pass)) {
                    if ($row->cli_type == 2) {
                        $this->session->set_userdata('admine', $mail);
                        $this->session->set_userdata('password', $password);
                        $this->session->set_userdata('nom', $row->cli_nom);
                        $this->session->set_userdata('prenom', $row->cli_prenom);
                        $this->load->view('header');
                        $this->load->view('liste',$bView);
                        $this->load->view('footer');

                    } else {
                        $this->session->set_userdata('client', $mail);
                        $this->session->set_userdata('password', $password);
                        $this->session->set_userdata('nom', $row->cli_nom);
                        $this->session->set_userdata('prenom', $row->cli_prenom);
                        $this->session->set_userdata('coef',$row->cli_coefficient);

                        $this->load->view('header');
                        $this->load->view('liste',$bView);
                        $this->load->view('footer');

                    }
                } else {
                    $this->session->set_flashdata('error', 'Le mot de passe est incorrect');
                    redirect("Produits/accueil");
                }

            } else {
                $this->session->set_flashdata('error', 'ce logine ou mot de passe est incorrect');
                redirect("Produits/accueil");
            }

        } else {
            $this->session->set_flashdata('info', 'Bonjour');
            redirect("Produits/accueil");
        }
    }

    public function verinsci()
    {


        $this->load->library('form_validation');
        if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire
            $data['cli_nom'] = $this->input->post('cli_nom');
            $data['cli_prenom'] = $this->input->post('cli_prenom');
            $data['cli_adresse'] = $this->input->post('cli_adresse');
            $data['cli_cp'] = $this->input->post('cli_cp');
            $data['cli_ville'] = $this->input->post('cli_ville');
            $data['cli_mail'] = $this->input->post('cli_mail');
            $data['cli_mot_pass'] = password_hash($this->input->post('cli_mot_pass'), PASSWORD_DEFAULT);
            $data['id_employees'] = 1;

            $this->form_validation->set_rules("cli_mail", "Email", 'trim|required|valid_email');
            $this->form_validation->set_rules("cli_mot_pass", "password", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("pass2", "passworde", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("cli_prenom", "prenom", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("cli_nom", "nom", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("cli_adresse", "adresse", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("cli_cp", "code postal", 'required|min_length[5]|max_length[10]');
            $this->form_validation->set_rules("cli_ville", "ville", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("cli_pays", "pays", "required", array("required" => "Le %s doit être obligatoire."));
            if ($this->form_validation->run() == FALSE) { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('header');
                $this->load->view('inscription', $data);
                $this->load->view('footer');
            } else {
                $this->load->model('Clients');
                $b = $this->Clients->inseruser($data);
                $this->load->view('header');
                $this->load->view('accueil');
                $this->load->view('footer');


            }
        } else {
            // 1er appel de la page: affichage du formulaire
            $this->load->view('header');
            $this->load->view('inscription');
            $this->load->view('footer');

        }
    }
        public function deconnect(){
            $this->session->sess_destroy();
            redirect('Produits/accueil');
        }

}