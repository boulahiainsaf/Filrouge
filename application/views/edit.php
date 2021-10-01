<div class="d-flex justify-content-center">
    <div class="container-fluid col-lg-10">

    <?php
    // Vérifier si le produit est bloqué
    foreach ($Produit_detail as $row)
    {


        echo form_open('Produits/update/'.$row->Id_produits);



        echo'
                <div class="d-flex justify-content-center"  >
                
                <!-- Afficher l\'image -->
                <img class="container-fluid col-lg-6" src="'. base_url().'assets/Charte/produit/'.$row->Id_produits.'.'.$row->pro_photo.'"width="50"/><br>
                </div>
                  <label for="Id_produits">ID</label>
                <input type="text" class="form-control" name="Id_produits" value="' . $row->Id_produits. '" disabled="disabled" >
                
                
                <!-- Afficher la référence du fournisseur -->
                <label for="pro_fou_ref">Référence :</label>
                <input type="text" class="form-control" name="pro_fou_ref" value="' . $row->pro_fou_ref . '" >
                <div class="text-danger">';
                     echo form_error("pro_fou_ref");
                echo' </div>
        <label for="pro_fou_ref">categories :</label>
            <select class="form-control col_8" name="pro_cat_id" id="pro_cat_id">';?>
                ?>
                <?php

                foreach ($liste_categories as $row2)
                {

                    echo"<option value=".$row2->cat_id.">".$row2->cat_nom."</option>";

                }
                ?>
            </select>
            <?php
            foreach ($Produit_detail as $row)
            {


        echo'
                <label for="pro_lib_court">liballé :</label>
                <input type="text" class="form-control" name="pro_lib_court" value="' . $row->pro_lib_court . '">
                <div class="text-danger">';
        echo form_error("pro_lib_court");
        echo' </div>
  
                <!-- Afficher le libellé long -->
                <label for="pro_lib_long">Description:</label>
                <input type="text" class="form-control" name="pro_lib_long" value="' . $row->pro_lib_long . '" >
                <div class="text-danger">';
        echo form_error("pro_lib_long");
        echo' </div>
 
                <!-- Afficher le prix d\'achat -->
                <label for="pro_pri_achat">prix :</label>
                <input type="text" class="form-control" name="pro_pri_achat" value="' . $row->pro_pri_achat . '" >
                <div class="text-danger">';
        echo  form_error("pro_pri_achat");
        echo'   </div>
   
                <!-- Afficher le stock -->
                <label for="pro_stock">Stock:</label>
                <input type="text" class="form-control" name="pro_stock" value="' . $row->pro_stock. '" >
                <div class="text-danger">';
        echo  form_error("pro_stock");
        echo' </div>
 
                <label for="Id_fournisseurs_pro">id de fornisseur</label>
                <input type="text" class="form-control" name="Id_fournisseurs_pro" value="' . $row->Id_fournisseurs_pro. '"disabled="disabled" >
                


            <!-- Afficher le select photo  -->
                <label for="pro_photo">Photo du produit</label>
                <select class="mt-3" name="pro_photo" id="pro_photo">
                    <option value="">--Selectionner le format du photo:--</option>
                    <option value="jpg">jpg</option>
                    <option value="jpeg">jpeg</option>
                    <option value="png">png</option>
                </select>
               <div class="text-danger">';
                echo  form_error("pro_photo");
                echo' </div>
 
                <!-- Afficher si le produit est bloqué ou pas -->                
                
                    <div class="form-check form-check-inline mt-3">
                    <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" id="pro_bloque1" value=1 name="pro_bloque"'; if($row->pro_bloque==1){echo "checked";}; echo'> Bloqu&eacute</label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio"  id="pro_bloque2" value=0 name="pro_bloque"'; if($row->pro_bloque==0){echo "checked";}; echo'> Non-bloqu&eacute</label>
                </div><br><br>
                 <div class="text-danger">';
                echo  form_error("pro_bloque");
                echo' </div>
                
                 <label for="sai_description">description de la modification</label>
                <input type="textrea" class="form-control" name="sai_description"  >
                <div class="text-danger">';
                echo  form_error("sai_description");
                echo' </div>
                
                ';}



             echo'    <br><br>
                <div class="container" name = actionProduit>
                <button class="btn btn-secondary "><a class="nav-link" role="button" href="'.base_url().'index.php/Produits/prodetail/'.$row->Id_produits.'">Retour</a></button>
                <button class="btn btn-primary" type="submit" name="submit" value="'.$row->Id_produits.'" >Envoyer</button>
                </div>';}
        ?>


        <!-- Afficher les catégories -->

            </form>

</div>
</div>