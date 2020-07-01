
<!-- ----- début viewDegre -->
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

      
      ?>
    <h2>La quantité de vin recolté avec une degré supérieure à une certaine valeur</h2>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='<?php echo ($target); ?>'>
        <label for="id">degre : (10.00 - 12.60) </label> 
        <input type="number" name='degre' step = '0.01' class="form-control">
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include_once $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewId -->