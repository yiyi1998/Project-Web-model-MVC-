<!-- ----- début viewDeleted -->
<?php
//include ('../../controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
      echo ("<h3>Le vin choisi a été supprimé </h3>");
    } else {
     echo ("<h3>Problème d'suppresion du vin. Il est probable qu'il soit présent dans la table des récoltes.</h3>");
     echo ("id = " . $_GET['id']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewDeleted -->    
