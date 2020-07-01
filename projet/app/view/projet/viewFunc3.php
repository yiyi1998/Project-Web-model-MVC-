
<!-- ----- début viewFunc3 -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
    <h2>Les degres moyennes des vins par région</h2>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Degré moyenne</th>
          <th scope = "col">Région</th>
        </tr>
      </thead>
      <tbody>
          <?php            
          foreach ($results as $element) {
           printf("<tr><td>%.2f</td><td>%s</td></tr>", $element[0], $element[1]);
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewFunc3 -->