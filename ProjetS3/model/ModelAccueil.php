<?php

    require_once'Model.php';
    
    class ModelAccueil {

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
            return $this->description;

        }

        public static function getDescription() {
            try{
               $sql = Model :: $pdo -> query('SELECT description FROM accueil WHERE nCo=1');     
            }
            catch (PDOException $e) {
              if (Conf::getDebug()) {
                echo $e->getMessage(); 
              } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
              }
              die();
            }
            $sql->setFetchMode(PDO::FETCH_CLASS, 'ModelAccueil');
            $desc = $sql->fetchAll();
            return $desc[0]->description;



        }

        public static function getImage() {
             try{
                
               $sql = Model :: $pdo -> query('SELECT description FROM accueil WHERE nCo=2');   
            }
            catch (PDOException $e) {
              if (Conf::getDebug()) {
                echo $e->getMessage(); 
              } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
              }
              die();
            }

            $sql->setFetchMode(PDO::FETCH_CLASS, 'ModelAccueil');
            $desc = $sql->fetchAll();
            return $desc[0]->description;




        }





        public static function modifDesc($texte) {
            try{
                $stmt = Model::$pdo->prepare("UPDATE `accueil` SET `description`=\" $texte \" WHERE nCo=1");
            }catch (PDOException $e) {
                if (Conf::getDebug()) {
                    echo $e->getMessage(); // affiche un message d'erreur
                } else {
                    echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
                }
                die();
            }

            $stmt->execute(array(
                'texte' => $texte
            ));

            
        }

        public static function modifIM($texte) {


            try{

                $stmt = Model::$pdo->prepare("UPDATE `accueil` SET `description`=\" $texte \" WHERE nCo=2");
            }catch (PDOException $e) {
                if (Conf::getDebug()) {
                    echo $e->getMessage(); // affiche un message d'erreur
                } else {
                    echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
                }
                die();
            }

            $stmt->execute(array(
                'texte' => $texte
            ));

         
        }


    }
?>