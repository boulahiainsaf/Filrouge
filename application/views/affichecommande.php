
<table class="table table-striped table-bordered container-fluid col-lg-8">
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">date de commande</th>
        <th scope="col">date de payement</th>
        <th scope="col">date d'expidation</th>
        <th scope="col">status</th>
        <th scope="col">type de payement</th>
        <th scope="col">total</th>
        <th scope="col">remise</th>
        <th scope="col">date de la facture</th>
        <th scope="col">adresse de la facture</th>
        <th scope="col">identifiant de client</th>

    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($liste_commandes as $row)
    {
        echo '<tr>';
        echo'<td ><a  href="'.site_url().'/CommandeC/detailC'.'/'.$row->Id_commandes.'">'.$row->Id_commandes.'</a></td>';
        echo'<td >'.$row->com_com_date.'</td>';
        echo '<td class="table-warning">'.$row->com_pay_date.'</td>';
        echo'<td >'.$row->com_exp_date.'</td>';
        echo'<td>'.$row->com_status.'</td>';
        if($row->com_type_paiement==0){ echo '<td>'.'différé'.'</td>';}else{ echo'<td>'.'à la commandes'.'</td>';}
        echo'<td>'.$row->com_prix_total.'</td>';
        echo'<td>'.$row->com_discount.'%</td>';
        echo'<td>'.$row->com_facture_date.'</td>';
        echo'<td>'.$row->com_facture_adresse.'</td>';
        echo'<td>'.$row->Id_clients.'</td>';

    }
    ?>
    </tr>

    </tbody>
</table>