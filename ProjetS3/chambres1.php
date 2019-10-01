<!DOCTYPE html>

<html>
  <head>
    <title>Location chambre d'hôtes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="./styles.css">
  </head>

  <body>
    <div class="container" id="wrapper">
      
      <!-- Menu -->
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
                <div> <a class="menu" href="./index.html"> Accueil </a> </div>
                <div> <a class="menu" href="./formulaireChambre.html"> Admin </a> </div>
                <div> <a class="menu" href="./lireChambre.php"> Chambre description test </a> </div>
                <div> <a class="menu" href="./chambres1.php"> Chambre </a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Caroussel -->
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content ">
              <div class="center">
                <img src="images/1.jpg" alt="n1">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Chambres -->
      <div class="row">
        <h2> La chambre </h2>
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <?php
                require_once "Model.php";
                require_once "Chambre.php";
                
                $desc = Chambre::getDescription();

                foreach  ($desc as $obj) {
                    echo $obj->afficher();
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <footer>
  </footer>
</html>
