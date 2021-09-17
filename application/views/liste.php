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
    <tbody>

    <?php
    foreach ($liste_produits as $row)
    {
        echo '<tr>';
        echo  '<th scope="row" class="table-warning">'.'<img src="'. base_url().'/assets/Charte/produit/'.$row->Id_produits.'.'.$row->pro_photo.'"width="75">'.'</th>';
        echo'<td >'.$row->Id_produits.'</td>';
        echo'<td >'.$row->pro_fou_ref.'</td>';
        echo '<td class="table-warning" >'.'<a style="color: blue" class="nav-link" href="'.site_url().'/Produits/ins'.'/'.$row->Id_produits.'">'.$row->pro_lib_court.'</a></td>';
        echo'<td >'.$row->pro_pri_achat.'</td>';
        echo'<td>'.$row->pro_stock.'</td>';
        echo'<td>'.$row->Id_fournisseurs_pro.'</td>';
        echo'<td>'.$row->Id_categories_pro.'</td>';



        if ( $row -> pro_bloque > 0 ) {echo  "<th>"."BLOQUE" . "</th>" ;} else { echo "<th>" ."N'EST PAS BLOQUE" . "</th>" ;}
    }
    ?>
    </tr>

    <a class="nav-link" href="<?php echo base_url();?>index.php/Ajout/Add">Ajout</a>
    </tbody>
</table>