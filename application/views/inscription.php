
        <form  action="<?php echo base_url();?>index.php/Connect/verinsci" method="POST" id="form">
            <h1>Créez vos identifiants</h1>

            <div class="parti1">
                <div class="b2">
                    <label>E-mail</label>
                    <input id="mail"name="cli_mail"  type="text" id="courriel1" size="40" value= "<?php if(isset($_POST["cli_mail"])){echo $_POST["cli_mail"];} ?>"/>
                    <span class="text-danger"><?php echo form_error('cli_mail')?></span>
                    <span style="color: red;"  id="c1"> </span><br>
                    <label >Créez votre mot de pass</label>

                    <input id="pass" type="password" name="cli_mot_pass" size="40" value= "<?php if(isset($_POST["cli_mot_pass"])){echo $_POST["cli_mot_pass"];} ?>"/><br>
                    <span style="color: red;"  id="c2"> </span>
                    <span class="text-danger"><?php echo form_error('cli_mot_pass')?></span>
                </div>
                <div class="b2">
                    <br>
                    <br>
                    <label>Confirmation mot de pass</label>
                    <input type="password" name="pass2" size="40" id="pass2" value= "<?php if(isset($_POST["pass2"])){echo $_POST["pass2"];} ?>"/><br>
                    <span style="color: red;"  id="c3"> <?php echo form_error('pass2')?></span>

                </div>
            </div>

            <br>
            <br>
            <h1>Créez vos identifiants</h1><br>
            <div class="parti1">
                <div class="b1 ">
                    <br>
                    <label>Prénom</label>
                    <input type="text"size="40"id="prenom"name="cli_prenom" value= "<?php if(isset($_POST["cli_prenom"])){echo $_POST["cli_prenom"];} ?>"/><br>
                    <p style="color: red;"  id="c4"> </p>
                    <span class="text-danger"><?php echo form_error('cli_prenom')?></span>
                    <label>Nom</label>
                    <input type="text"size="40" id="nom" name="cli_nom" value= "<?php if(isset($_POST["cli_nom"])){echo $_POST["cli_nom"];} ?>"/><br>
                    <p style="color: red;"  id="c5"> </p>
                    <span class="text-danger"><?php echo form_error('cli_nom')?></span>
                    <label>Adresse</label>
                    <input type="text"size="40"id="adresse" name="cli_adresse" value= "<?php if(isset($_POST["cli_adress"])){echo $_POST["cli_adress"];} ?>"/><br>
                    <p style="color: red;"  id="c6"> </p>
                    <span class="text-danger"><?php echo form_error('cli_adresse')?></span>
                    <label>Complément d’adresse</label>
                    <input type="text"size="40"id="cpAdresse"value= "<?php if(isset($_POST["cpadresse"])){echo $_POST["cpadresse"];} ?>"/>
                    <p></p>
                    <label>Code postal</label>
                    <input type="text"size="40" name="cli_cp" id="cp"value= "<?php if(isset($_POST["cli_cp"])){echo $_POST["cli_cp"];} ?>"/><br>
                    <p style="color: red;"  id="c7"> </p>
                    <span class="text-danger"><?php echo form_error('cli_cp')?></span>
                    <label>Ville</label>
                    <input type="text"size="40"id="ville" name="cli_ville" value= "<?php if(isset($_POST["cli_ville"])){echo $_POST["cli_ville"];} ?>"/><br>
                    <p style="color: red;"  id="c8"> </p>
                    <span class="text-danger"><?php echo form_error('cli_ville')?></span>
                    <label>Pays</label>
                    <input type="text"size="40"id="pays" name="cli_pays" value="<?php if(isset($_POST["cli_pays"])){echo $_POST["cli_pays"];} ?>"/><br>
                    <p style="color: red;"  id="c9"> </p>
                    <span class="text-danger"><?php echo form_error('cli_pays')?></span>
                </div>

                <div class="b">
                    <img class="imgb" src="<?php echo base_url();?>/assets/Charte/BODY/ESPACE%20CLIENT/CADRE%20numero.png" width="75%">
                </div>
            </div>
            <div class="esp"></div>
            <input type="submit" id="envoyer1" class="btn" value="envoyer"/>

        </form>
        <img class="ph" src="<?php echo base_url();?>/assets/Charte/BODY/ESPACE%20CLIENT/bas%20de%20page%20pictos.png">

    </div>
