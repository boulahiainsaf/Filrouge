<div class="d-flex justify-content-center">
    <div  class="container-fluid col-lg-10">


        <?php
        foreach ($detail_commande as $row1)
        {


            echo form_open('Produits/ModifPro/'.$row1->Id_commandes);



            echo'     
            <label for="pro_ref">Référence :</label>
            <input type="text" class="form-control" name="pro_ref" value="' . $row1->Id_commandes . '"   >
            <label for="pro_cat_id">Nom catégorie</label>
    <select class="form-control col_8" name="pro_cat_id" id="pro_cat_id">';}
        ?>
        <?php

        foreach ($liste_categories as $row2)
        {

            echo"<option value=".$row2->cat_id.">".$row2->cat_nom."</option>";

        }
        ?>
        </select>
        <?php
        foreach ($Produit_detail as $row1)
        {echo'
            <label for="pro_libelle">LIbellé :</label>
            <input type="text" class="form-control" name="pro_libelle" value="' . $row1->pro_libelle . '">
            <div class="text-danger">';
            echo      form_error("pro_libelle");
            echo'  </div>
            <label for="pro_libelle">Description:</label>
            <input type="text" class="form-control" name="pro_ref" value="' . $row1->pro_description . '" >
             <div class="text-danger">';
            echo form_error("pro_ref");
            echo    ' </div>
            <label for="pro_prix">prix :</label>
            <input type="text" class="form-control" name="pro_prix" value="' . $row1->pro_prix . '" >
             <div class="text-danger">';
            echo  form_error("pro_prix");
            echo'   </div>
            <label for="pro_stock">Stock:</label>
            <input type="text" class="form-control" name="pro_stock" value="' . $row1->pro_stock. '" >
             <div class="text-danger">';
            echo  form_error("pro_stock");
            echo' </div>
            <label for="pro_couleur">Couleur :</label>
            <input type="text" class="form-control" name="pro_couleur" value="' . $row1->pro_couleur . '" >
            <label for="pro_d_ajout">Date d ajout :</label>
            <input type="date" class="form-control" name="pro_d_ajout" value="' . $row1->pro_d_ajout . '" >
            
            <label for="pro_bloque">Produit bloqué ? :<br/>
            <input type="radio" name="oui"' .$var.' " >oui
            <input type="radio" name="non"'.$var1.'"  >non
            </label>

             <br><br>
                <div class="container" name = actionProduit>
                <button class="btn btn-secondary "><a class="nav-link" role="button" href="'.base_url().'index.php/Produits/detail/'.$row1->pro_id.'">Retour</a></button>
               <button class="btn btn-primary" type="submit" name="submit" value="'.$row1->pro_id.'" >Envoyer</button>';
        }
        ?>

    </div>
