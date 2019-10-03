<?php

class Accueil {

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
        $sql = Model :: $pdo -> query('SELECT description FROM accueil');
        $sql->setFetchMode(PDO::FETCH_CLASS, 'accueil');
        $desc = $sql->fetchAll();
        return $desc;



    }

    public static function modifDesc($texte) {
        $stmt = Model::$pdo->prepare("UPDATE `accueil` SET `description`=\" $texte \" WHERE 1");


        $stmt->execute(array(
            'texte' => $texte
        ));

        echo "<h1>FIN</h1>";
    }


}
?>