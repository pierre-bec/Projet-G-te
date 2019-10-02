<?php

require_once'Model.php';

class descritption_A {

    private $texte;

    public function __construct($texte = NULL) {
        if (!is_null($texte)) {
            $this->texte = $texte;
        }
    }

    public function modifDesc() {
        $sql="UPDATE desc SET contenu = $this->texte WHERE nDesc=1";

        $req_prep = Model::$pdo->prepare($sql);

        try {
            $req_prep = Model::$pdo->prepare($sql);
        } catch (Exception $ex) {
            echo $ex->getMessage(); // affiche un message d'erreur
            die();

        }

        $values = array(
            "nDesc" => 1,
            "contenu" => $this->texte,
        );

        if ($req_prep->execute($values)== true) {
            echo "Insertion complete";
        } else {
            echo "Insertion Failed";
        }


    }

    public static function getDescription() {
        $sql = "SELECT * from desc WHERE nDesc=:tag";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "tag" => 1,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'description_A');
        $tab_desc = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_desc)) {
            return false;
        } else {
            return $tab_desc[0];
        }

    }

    public function afficher() {
        echo $this->texte;
    }

}
