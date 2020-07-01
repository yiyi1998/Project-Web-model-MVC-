<!-- ----- debut Router2 -->
<?php
require ('../controller/ControllerVin.php');
require ('../controller/ControllerProducteur.php');
require ('../controller/ControllerProjet.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

$action = $param['action'];

unset($param['action']);

$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "vinReadAll" :
    case "vinReadOne" :
    case "vinReadId" :
    case "vinCreate" :
    case "vinCreated" :
    case "vinDeleted" :
        ControllerVin::$action($args);
        break;
    case "producteurReadAll" :
    case "producteurReadOne" :
    case "producteurReadId" :
    case "producteurCreate" :
    case "producteurCreated" :
    case "producteurUniqueRegion" :
    case "producteurDeleted" :
        ControllerProducteur::$action($args);
        break;
    case "projetReadDegre":
    case "projetFunc1":
    case "projetFunc2":
    case "projetFunc3":
    case "projetFunc4":
    case "projetReadNombreCru":
    case "projetFunc5":
        ControllerProjet::$action($args);
        break;
    // Tache par défaut
    default:
        $action = "caveAccueil";
        ControllerVin::$action();
}
?>
<!-- ----- Fin Router2 -->

