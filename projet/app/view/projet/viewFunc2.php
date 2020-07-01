
<!-- ----- début viewFunc2 -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
    <h2>La quantité de vin produit par région</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">région</th>
          <th scope = "col">qualité</th>
        </tr>
      </thead>
      <tbody>
          <?php          
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%d</td></tr>", $element[0], $element[1]);
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->