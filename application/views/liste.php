<?php
 if(isset($this->session->admine)){
 echo"";

}else{
    echo  base_url().'/views/errors/index.html';
}
?>
<form action="<?php echo base_url();?>index.php/Produits/tri" method="POST" >
    <select  id="inputstate" name="sujet"  value="<?php if(isset($_POST['sujet'])){echo $_POST['sujet'];} ?>" >
        <option selected>Triez par :</option>
        <option value="croissant" <?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="croissant")){echo 'selected';}?>>Prix croissant</a></option></a>
        <option value="decroissant"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="decroissant")){echo 'selected';}?>>Pris décroissant</option>
        <option value="nouveauté"<?php if(isset($_POST['sujet'])&&($_POST['sujet'] =="nouveauté")){echo 'selected';}?>>novauté</option>
    </select>
    <input type="submit" class="btn-xs btn-info" value="envoyer">
</form>
<table class="table table-striped table-bordered container-fluid col-lg-8">
    <thead>
    <tr>
        <th scope="col">Photo</th>
        <th scope="col">ID</th>
        <th scope="col">Référence</th>
        <th scope="col">Libell&eacute;</th>
        <th scope="col">Prix</th>
        <th scope="col">Stock</th>
        <th scope="col">fournisseur</th>
        <th scope="col">catégorie</th>
        <th scope="col">Bloqué</th>
    </tr>
    </thead>

    <?php
    foreach ($liste_produits as $row)
    {
        echo '<tr>';
        echo  '<th scope="row" class="table-warning">'.'<img src="'. base_url().'/assets/Charte/produit/'.$row->Id_produits.'.'.$row->pro_photo.'"width="75">'.'</th>';
        echo'<td >'.$row->Id_produits.'</td>';
        echo'<td >'.$row->pro_fou_ref.'</td>';
        echo '<td class="table-warning" >'.'<a style="color: blue" class="nav-link" href="'.site_url().'/Produits/prodetail'.'/'.$row->Id_produits.'">'.$row->pro_lib_court.'</a></td>';
        echo'<td >'.$row->pro_pri_achat.'&#x20AC;</td>';
        echo'<td>'.$row->pro_stock.'</td>';
        echo'<td>'.$row->Id_fournisseurs_pro.'</td>';
        echo'<td>'.$row->cat_nom.'</td>';



        if ( $row -> pro_bloque > 0 ) {echo  "<th>"."BLOQUE" . "</th>" ;} else { echo "<th>" ."" . "</th>" ;}
    }
    ?>
    </tr>

    <a class="" href="<?php echo base_url();?>index.php/CommandeC/tousCommande">Tous les commandes</a>
    <a class="" href="<?php echo base_url();?>index.php/Produits/create">Ajouter des produits</a>
    </tbody>
</table>
