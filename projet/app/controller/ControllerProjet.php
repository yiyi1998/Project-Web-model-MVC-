<!-- ----- debut ControllerProjet -->
<?php
require_once '../model/ModelVin.php';
require_once '../model/ModelRecolte.php';

class ControllerProjet {


 
 
 public static function projetFunc1() {

  $results = ModelRecolte::Func1();

  include  'config.php';
  $vue = $root . '/app/view/projet/viewFunc1.php';
  if (DEBUG)
   echo ("ControllerProjet : readDegre : vue = $vue");
  require ($vue);
 }


 

 public static function projetFunc2() {

  $results = ModelRecolte::Func2();

  include  'config.php';
  $vue = $root . '/app/view/projet/viewFunc2.php';
  if (DEBUG)
   echo ("ControllerProjet : readDegre : vue = $vue");
  require ($vue);
 }


  public static function projetFunc3() {
  $results = ModelRecolte::Func3();

  include  'config.php';
  $vue = $root . '/app/view/projet/viewFunc3.php';
  if (DEBUG)
   echo ("ControllerProjet : readDegre : vue = $vue");
  require ($vue);
 }
 
 public static function projetReadDegre($args) {
  include  'config.php';
  $target = $args['target'];
  $vue = $root . '/app/view/projet/viewDegre.php';
  if (DEBUG)
   echo ("ControllerProjet : readDegre : vue = $vue");
  require ($vue);
 }
 
 public static function projetFunc4() {

  $degre = $_GET['degre'];
  $results = ModelRecolte::Func4($degre);

  include  'config.php';
  $vue = $root . '/app/view/projet/viewFunc4.php';
  if (DEBUG)
   echo ("ControllerProjet : readDegre : vue = $vue");
  require ($vue);
 }

  
 public static function projetReadNombreCru($args) {
  // ----- Construction chemin de la vue
  include  'config.php';
  $target = $args['target'];
  $vue = $root . '/app/view/projet/viewNombre.php';
  if (DEBUG)
   echo ("ControllerVin : readDegre : vue = $vue");
  require ($vue);
 }

  public static function projetFunc5() {

  $nombre = $_GET['nombre'];
  $results = ModelRecolte::Func5($nombre);

  include  'config.php';
  $vue = $root . '/app/view/projet/viewFunc5.php';
  if (DEBUG)
   echo ("ControllerProjet : readDegre : vue = $vue");
  require ($vue);
 }

}
?>
<!-- ----- fin ControllerVin -->


