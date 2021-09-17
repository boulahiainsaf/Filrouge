<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <title>Village Green</title>
</head>
<body>

<div class="tous container p-0">
    <div class="row g-0  ">
        <nav class="navbar navbar-expand p-0">
            <div class="row container-fluid p-0 m-0 ">
                <div id="navlogo" class="p-0">
                    <img id="logo" src="<?php echo base_url();?>assets/Charte/HEADER/logo village green.png" alt="Logo Village Green" title="Logo Village Green">
                </div>

                <div id="navbar" class="p-0">

                    <div class="row m-0" id="nav1">
                        <div class="container navbar d-flex justify-content-end p-0" >
                            <a class="nav-link" href="#">Infos</a>
                            <div class="dropdown" >
                                <a class="nav-link" href="#">Espace Client</a>
                                <div class="dropdown-content " >
                                    <div class="pfff">
                                        <div >
                                            <?php echo form_open(); ?>
                                            <form method="POST" action="<?php echo base_url();?>/index.php/Connect/inscri/verefconnect" class="col-10" enctype="multipart/form-data">
                                                <h6>Etes-vous déjà clients chez nous ? </h6>
                                                <input  name="mail" class="form-control" id="mail" placeholder="Adresse E-mail" >
                                                <?php echo form_error('mail'); ?>
                                                <p style="color: red;" id="c2"> </p>
                                                <P></P>
                                                <input name="pass" class="form-control" id="pass"placeholder="Mot de passe"><br>
                                                <?php echo form_error('pass'); ?>
                                                <input class="form-check-input" type="checkbox">Rester connecté
                                                <input type="submit" id="envoyer1" class="btn btn-dark " value="Se connecter maintenant">

                                                <a class="nav-link">Vous avez oublié votre mot de passe ?</a>
                                            </form>
                                        </div>
                                        <div  >

                                            <h6>N’êtes-vous pas encore client ?</h6>
                                            <p>En tant que client Village Green<br>vous pouvez suivre vos envoies,<br> lire des tests produits exclusifs,<br>
                                                évaluer des produits,<br> déposer des petites annonces, <br>gérer vos chèques-cadeaux,<br> devenir partenaire et bien plus encore.</p>
                                            <a href="<?php echo base_url();?>index.php/Produits/inscri"><input type="submit" class="btn btn-dark "value="S'inscrire"/></a>

                                            <a class="nav-link">Plus d’informations</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="nav-link" href="#">
                                <img src="<?php echo base_url();?>/assets/Charte/HEADER/picto panier.png"  title="Votre panier">
                            </a>
                            <a class="nav-link" href="#">
                                <img src="<?php echo base_url();?>/assets/Charte/HEADER/picto pays.png"  title="Langue de navigation">
                            </a>

                        </div>
                    </div>

                    <div class="row m-0" id="nav2">
                        <div class="container p-1">
                            <a class="nav-link fw-bold py-1" href="<?php echo base_url();?>index.php/Produits/liste">Produits</a>
                            <a class="nav-link fw-bold py-1" href="#">Services</a>
                            <a class="nav-link fw-bold py-1" href="#">Aide</a>
                            <a class="nav-link fw-bold py-1" href="#">A Propos</a>
                        </div>
                    </div>

                    <div class="row m-0" id="nav3">
                        <div class="container navbar d-flex justify-content-end p-1">

                            <div class="dropdown">
                                <a class="nav-link pr-1 px-3 me-2" href="#">Guit/Bass</a>
                                <div class="dropdown-content colonne" >

                                    <a href="#"class="liste">Guitares Electriques</a>
                                    <a href="#"class="liste">Guitares classiques</a>
                                    <a href="#"class="liste">Guitares Acoustiques & Electro-Acoustique</a>
                                    <a href="#"class="liste">Basses Electriques</a>
                                    <a href="#"class="liste">Basses Acoustiques</a>
                                    <a href="#"class="liste">Basses Semi-Acoustiques</a>
                                    <a href="#"class="liste">Ukulélés</a>
                                </div>
                            </div>
                            <a class="nav-link pr-1 px-3 me-2" href="#">Batteries</a>
                            <a  class="nav-link pr-1 px-3 me-2" href="#">Claviers</a>
                            <a class="nav-link pr-1 px-3 me-2" href="#">Studio</a>
                            <a class="nav-link pr-1 px-3 me-2" href="#">Sono</a>
                            <a class="nav-link pr-1 px-3 me-2" href="#">Eclairages</a>
                            <a class="nav-link pr-1 px-3 me-2" href="#">DJ</a>
                            <a class="nav-link pr-1 px-3 me-2" href="#">Cases</a>
                            <a class="nav-link pr-1 px-3 me-2" href="#">Accessoires</a>
                        </div>


                    </div>
                </div>
            </div>
            <!-- </div> -->
        </nav>