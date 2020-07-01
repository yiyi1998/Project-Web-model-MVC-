
<!-- ----- début viewFunc4 -->
<?php 
//include_once ('../../controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

      // $results contient un tableau avec la liste des clés.
      ?>
      <h4>
        <?php
          printf('La quantité de vin recolté avec une degré supérieure à %.2f : %s',$degre,$results[0]);
        ?>
      </h4>
    <p/>
  </div>

  <?php include_once $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewFunc4 -->