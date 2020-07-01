
<!-- ----- debut ModelRecolte -->
<?php
require_once 'Model.php';

class ModelRecolte {

 private $producteur_id, $vin_id, $quantite;

 // pas possible d'avoir 2 constructeurs
 public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->producteur_id = $producteur_id;
   $this->vin_id = $vin_id;
   $this->quantite = $quantite;
  }
 }

 function setProducteurId($id) {
  $this->producteur_id = $id;
 }

 function setVinId($id) {
  $this->vin_id = $id;
 }

 function setQuantite($quantite) {
  $this->quantite = $quantite;
 }

 function getProducteurId() {
  return $this->producteur_id;
 }

 function getVinId() {
  return $this->vin_id;
 }

 function getQuantite() {
  return $this->quantite;
 }

 public function __toString() {
  return $this->id;
 }

 // Persistance .......


 public static function view() {
  printf("<tr><td>%d</td><td>%d</td><td>%d</td></tr>", $this->getProducteurId(), $this->getVinId(), $this->getQuantite());
 }
 
 public static function Func1(){
  try {
     $database = Model::getInstance();
     $query = "SELECT v.cru,SUM(r.quantite) from vin v,recolte r WHERE v.id=r.vin_id GROUP BY v.cru";
     $statement = $database->prepare($query);
     $statement->execute() ;
     $results = $statement->fetchAll(PDO::FETCH_NUM);
     return $results;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return NULL;
    }
 }


 public static function Func2(){
  try {
     $database = Model::getInstance();
     $query = "SELECT p.region,SUM(r.quantite) from producteur p,recolte r WHERE p.id=r.producteur_id GROUP BY p.region";
     $statement = $database->prepare($query);
     $statement->execute() ;
     $results = $statement->fetchAll(PDO::FETCH_NUM);
     return $results;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return NULL;
    }
 }

  public static function Func3(){
  try {
     $database = Model::getInstance();
     $query = "SELECT AVG(v.degre) , p.region FROM vin v, producteur p, recolte r WHERE v.id = r.vin_id AND p.id = r.producteur_id  GROUP BY p.region;";
     $statement = $database->prepare($query);
     $statement->execute();
     $results = $statement->fetchAll(PDO::FETCH_NUM);
     return $results;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return NULL;
    }
 }

 public static function Func4($degre){
  try {
     $database = Model::getInstance();
     $query = "select sum(quantite) from vin v,recolte r where v.id=r.vin_id and v.degre > :degre";
     $statement = $database->prepare($query);
     $statement->execute([
      'degre' => $degre
    ]);
     $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
     return $results;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return NULL;
    }
 }
  

  public static function Func5($nombre){
  try {
     $database = Model::getInstance();
     $query = "SELECT p.nom,p.prenom, COUNT(DISTINCT(v.cru)) FROM recolte r, producteur p, vin v WHERE v.id=r.vin_id AND p.id=r.producteur_id GROUP BY p.id HAVING COUNT(DISTINCT(v.cru))>=:nombre ORDER BY p.nom ";
     $statement = $database->prepare($query);
     $statement->execute(['nombre'=>$nombre]) ;
     $results = $statement->fetchAll(PDO::FETCH_NUM);
     return $results;
    } catch (PDOException $e) {
     printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
     return NULL;
    }
 }
}
?>
<!-- ----- fin ModelRecolte -->
