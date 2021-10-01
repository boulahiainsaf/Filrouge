<?php echo form_open('Produits/createProd'); ?>


<h1>Ajouter un produit</h1>

<div class="container-fluid col-lg-6">
    <div class="b2">

        <label>Libellé court</label>
        <input id="pro_lib_court"name="pro_lib_court" class="mb-1" type="text" id="pro_lib_court" size="100%" value= "<?php if(isset($_POST["pro_lib_court"])){echo $_POST["pro_lib_court"];} ?>"/>
        <small class="text-danger"><?php echo form_error('pro_lib_court')?></small>

        <label>Libellé long</label>
        <input id="pro_lib_long"name="pro_lib_long" class="mb-1" type="textarea" size="100"% value= "<?php if(isset($_POST["pro_lib_long"])){echo $_POST["pro_lib_long"];} ?>"/>
        <small class="text-danger"><?php echo form_error('pro_lib_long')?></small>

        <label>Référence du fournisseur </label>
        <input id="pro_fou_re" name="pro_fou_ref" class="mb-1" type="text" size="100"% value= "<?php if(isset($_POST["pro_fou_ref"])){echo $_POST["pro_fou_ref"];} ?>"/>
        <small class="text-danger"><?php echo form_error('pro_fou_ref')?></small>

        <label>Prix d'achat</label>
        <input id="pro_pri_achat"name="pro_pri_achat" class="mb-1" type="text" size="100"% value= "<?php if(isset($_POST["pro_pri_achat"])){echo $_POST["pro_pri_achat"];} ?>"/>
        <small class="text-danger"><?php echo form_error('pro_pri_achat')?></small>

        <label>Stock</label>
        <input id="pro_stock"name="pro_stock" class="mb-1" type="text" size="100"% value= "<?php if(isset($_POST["pro_stock"])){echo $_POST["pro_stock"];} ?>"/>
        <small class="text-danger"><?php echo form_error('pro_stock')?></small>

        <label>ID du fournisseur</label>
        <input id="id_fournisseurs_pro"name="id_fournisseurs_pro" class="mb-1" type="text" size="100"% value= "<?php if(isset($_POST["id_fournisseurs_pro"])){echo $_POST["id_fournisseurs_pro"];} ?>"/>
        <small class="text-danger"><?php echo form_error('id_fournisseurs_pro')?></small>

        <label>Identifiant de catégorie</label>
        <input id="id_categories_pro"name="id_categories_pro" class="mb-1" type="text" size="100"% value= "<?php if(isset($_POST["id_categories_pro"])){echo $_POST["id_categories_pro"];} ?>"/>
        <small class="text-danger"><?php echo form_error('id_categories_pro')?></small>

    </div>

    <label for="pro_photo">Photo du produit</label>
    <select class="mt-3" name="pro_photo" id="pro_photo">
        <option value="">--Selectionner le format du photo:--</option>
        <option value="jpg">jpg</option>
        <option value="jpeg">jpeg</option>
        <option value="png">png</option>
    </select>
    <small class="text-danger"><?php echo form_error('pro_photo')?></small>


    <label>Produit bloqué&nbsp&nbsp</label>
    <div class="form-check form-check-inline mt-3">
        <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque1" value=0 checked>Non-bloqu&eacute</label>
    </div>
    <div class="form-check form-check-inline">
        <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque2" value=1>Bloqu&eacute</label>
    </div><br><br>

    <div class="b2">
        <input type="submit" name="submit" value="Ajouter produit" />
    </div>

</div>