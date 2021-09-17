<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connect extends CI_Controller
{

    public function verefconnect()
    {
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');

        $this->form_validation->set_rules("mail", "Email", "required", array("required" => "Le %s doit être obligatoire."));
        $this->form_validation->set_rules("pass", "password", "required", array("required" => "Le %s doit être obligatoire."));


        //essai
        if ($this->form_validation->run()) {
            $mail = $this->input->post('mail');
            $password = $this->input->post('pass');
            $this->load->model('Clients');
            $b = $this->Clients->user($mail);
            foreach ($b as $row)
                $buse['user'] = $b;
            if ($b != NULL) {
                if (password_verify($password, $row->us_password)) {
                    if ($row->role == 1) {
                        $this->session->set_userdata('admine', $mail);
                        $this->session->set_userdata('password', $password);
                        redirect("produits/accueil");

                    } else {
                        $this->session->set_userdata('client', $mail);
                        $this->session->set_userdata('password', $password);
                        echo 'ouiiii';
                    }
                } else {
                    $this->session->set_flashdata('error', 'Le mots de passe est incorrect');
                    redirect("Produits/inscri");
                }

            } else {
                $this->session->set_flashdata('error', 'ce logine ou mots de passe est incorrect');
                redirect("Produits/inscri");
            }

        } else {
            $this->load->view('haed');
            $this->load->view('accueil');
            $this->load->view('footer');
        }
    }

    public function verinsci()
    {
        $newuse = $this->input->post();

        $this->load->library('form_validation');
        if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();
            $this->form_validation->set_rules("mail", "Email", 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules("pass", "password", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("pass2", "passworde", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("prenom", "prenom", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("adresse", "adresse", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("cp", "code postal", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("ville", "ville", "required", array("required" => "Le %s doit être obligatoire."));
            $this->form_validation->set_rules("paye", "paye", "required", array("required" => "Le %s doit être obligatoire."));
            if ($this->form_validation->run() == FALSE) { // Echec de la validation, on réaffiche la vue formulaire
                $this->load->view('header');
                $this->load->view('inscription', $data);
            } else {
                echo "ok";
            }
        }else{
        // 1er appel de la page: affichage du formulaire
        $this->load->view('header');
        $this->load->view('inscription');
    }
        }

}