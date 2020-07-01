
<!-- ----- début viewNombre -->
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
    <h2>La liste des noms et des prénoms des producteurs qui produisent une quantité de cru supérieure à une certaine valeur</h2>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='<?php echo ($target); ?>'>
        <label for="id">Supérieure à : </label> 
        <input type="number" name='nombre' class="form-control">
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include_once $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewNombre -->