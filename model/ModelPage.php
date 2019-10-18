<?php

    require_once File::build_path(array('model','Model.php'));

    class ModelPage {

        public static function getDescription($id) {
            try{
                $sql = Model::$pdo -> query("SELECT * FROM Pages WHERE id=$id");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
            }
            $desc = $sql->fetch();
            return $desc['descPage'];



        }

        public static function getImage($id) {
             try{
               $sql = Model::$pdo -> query("SELECT * FROM Pages WHERE id=$id");
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                die();
              }
            $desc = $sql->fetch();
            return $desc['url1'];
        }




    }
?>