<?php
require ('../../app/controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>
        <h3>Fonction1 : La liste des crus et la quantité par cru<br/></h3>
        Requête : SELECT v.cru,SUM(r.quantite) from vin v, recolte r WHERE v.id=r.vin_id GROUP BY v.cru</br>
        <h3>Fonction2 : La quantité de vins produits par région<br/></h3>
        Requête : SELECT p.region,SUM(r.quantite) from producteur p,recolte r WHERE p.id=r.producteur_id GROUP BY p.region</br>
        <h3>Fonction3 : Les degres moyennes des vins par région<br/></h3>
        Requete : SELECT AVG(v.degre) , p.region FROM vin v, producteur p, recolte r WHERE v.id = r.vin_id AND p.id = r.producteur_id  GROUP BY p.region</br>
        <h3>Fonction4 : La quantité de vin recolté avec une degré supérieure à une certaine valeur<br/></h3>
        Requete : SELECT sum(quantite) from vin v, recolte r where v.id=r.vin_id and v.degre > :degre
        <h3>Fonction5 : La liste des noms et des prénoms des producteurs qui produisent une quantité de cru supérieure à une certaine valeur<br/></h3>
        Requete : SELECT p.nom,p.prenom, COUNT(DISTINCT(v.cru)) FROM recolte r, producteur p, vin v WHERE v.id=r.vin_id AND p.id=r.producteur_id GROUP BY p.id HAVING COUNT(DISTINCT(v.cru))>=:nombre ORDER BY p.nom<br/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>