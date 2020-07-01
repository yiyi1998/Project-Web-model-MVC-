
<!-- ----- début viewFunc1 -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
    <h2>La liste des crus et la quantité par cru</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Cru</th>
          <th scope = "col">Quantité</th>
        </tr>
      </thead>
      <tbody>
          <?php
          //La liste des vins est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%s</td><td>%d</td></tr>", $element[0], $element[1]);
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->