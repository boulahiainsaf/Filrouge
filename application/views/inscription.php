
        <form  action="<?php echo base_url();?>index.php/Connect/verinsci" method="POST" id="form">
            <h1>Créez vos identifiants</h1>

            <div class="parti1">
                <div class="b2">
                    <label>E-mail</label>
                    <input id="mail"name="mail"  type="text" id="courriel1" size="40" value= "<?php if(isset($_POST["mail"])){echo $_POST["mail"];} ?>"/><br>
                    <span class="text-danger"><?php echo form_error('mail')?></span>
                    <span style="color: red;"  id="c1"> </span><br>
                    <label >Créez votre mot de pass</label>

                    <input id="pass" type="password" name="pass" size="40" value= "<?php if(isset($_POST["pass"])){echo $_POST["pass"];} ?>"/><br>
                    <span style="color: red;"  id="c2"> </span>
                    <span class="text-danger"><?php echo form_error('pass')?></span>
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
                    <input type="text"size="40"id="prenom" value= "<?php if(isset($_POST["prenom"])){echo $_POST["prenom"];} ?>"/><br>
                    <p style="color: red;"  id="c4"> </p>
                    <label>Nom</label>
                    <input type="text"size="40" id="nom" value= "<?php if(isset($_POST["Nom"])){echo $_POST["Nom"];} ?>"/><br>
                    <p style="color: red;"  id="c5"> </p>
                    <label>Adresse</label>
                    <input type="text"size="40"id="adresse"value= "<?php if(isset($_POST["adress"])){echo $_POST["adress"];} ?>"/><br>
                    <p style="color: red;"  id="c6"> </p>
                    <label>Complément d’adresse</label>
                    <input type="text"size="40"id="cpAdresse"value= "<?php if(isset($_POST["cpadresse"])){echo $_POST["cpadresse"];} ?>"/>
                    <p></p>
                    <label>Code postal</label>
                    <input type="text"size="40" id="cp"value= "<?php if(isset($_POST["cp"])){echo $_POST["cp"];} ?>"/><br>
                    <p style="color: red;"  id="c7"> </p>
                    <label>Ville</label>
                    <input type="text"size="40"id="ville"value= "<?php if(isset($_POST["ville"])){echo $_POST["ville"];} ?>"/><br>
                    <p style="color: red;"  id="c8"> </p>
                    <label>Pays</label>
                    <input type="text"size="40"id="pays"value="<?php if(isset($_POST["paye"])){echo $_POST["paye"];} ?>"/><br>
                    <p style="color: red;"  id="c9"> </p>
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
