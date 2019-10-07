<?php
require_once('Model.php');
  class Chambre {
     
    private $description;
         
    // un setter 
    public function setDescription($description) {
         $this->description = $description;
    }

    // un constructeur
    public function __construct($d = NULL) {
      if (!is_null($d)) {
        $this->description = $d;
      }
    }
             
    // une methode d'affichage.
    public function afficher() {
      echo "$this->description";
      
    }

    public static function getDescription() {
      $sql = Model :: $pdo -> query('SELECT description FROM chambre');
      $sql->setFetchMode(PDO::FETCH_CLASS, 'chambre');
      $desc = $sql->fetchAll();
      return $desc;
    }

    public function save(){
        $sql = "INSERT INTO chambre (description)
              VALUES (:description)";
        $req_prep = Model :: $pdo -> prepare($sql);
        $values = array(
          "description" => $this->description,
        );
        if ($req_prep->execute($values)==true){
          echo "Insertion réussi";
        }
        else {
          echo "Insertion raté";
        }
    }
  }
?>