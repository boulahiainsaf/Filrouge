<?php
if(isset($this->session->coef) ){
$cof=$this->session->coef;
}else {
    $cof = 2;
}?>

<table class="table table-striped table-bordered container-fluid col-lg-8">
    <thead>

    <tr>
        <th scope="col">Photo</th>
        <th scope="col">Libell&eacute;</th>
        <th scope="col">description </th>
        <th scope="col">Prix</th>
        <th scope="col">Bloqué</th>
    </tr>
    </thead>
    <tbody>

    <?php
        foreach ($liste_produits as $row) {



                echo '<tr>';
                echo '<th  class="table-warning">' . '<img src="' . base_url() . '/assets/Charte/produit/' . $row->Id_produits . '.' . $row->pro_photo . '"width="75">' . '</th>';
                echo '<td  >'  . $row->pro_lib_court . '</td>';
                echo '<td class="table-warning" >' . $row->pro_lib_long . '</td>';
                echo '<td >' . $row->pro_pri_achat *$cof. '&#x20AC;</td>';





            if ( $row -> pro_bloque > 0 ) {echo  "<th>"."Rupture de stock" . "</th>" ;} else { echo "<th>" ."" . "</th>" ;}
        }
    ?>
    </tr>

    </tbody>
</table>