
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
    <h2>La liste des noms et prénoms des producteurs qui produisent plus de <?php echo $nombre; ?> crus</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Nom</th>
          <th scope = "col">Prénom</th>
          <th scope = "col">Quantité de cru</th>
        </tr>
      </thead>
      <tbody>
          <?php
          //La liste des vins est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $element[0], $element[1],$element[2]);
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->