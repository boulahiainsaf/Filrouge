__prix de vente
select pro_pri_achat,(pro_pri_achat*clients.cli_coefficient) as 'prix_de vent' from produits
join ligne_de_commande
on produits.Id_produits=ligne_de_commande.Id_produits
join commandes
on ligne_de_commande.Id_commandes_li=commandes.Id_commandes
join clients
on commandes.Id_clients=clients.Id_clients

