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
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper blue lighten-5">
                        <ul class="hide-on-down">
                            <li><a class="black-text" href="../index.php">Accueil</a></li>
                            <li><a class="black-text" href="./Admin.php">Admin</a></li>
                            <li><a class="black-text" href="./chambres1.php">Chambre</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <form action = "../controller/ControllerAccueil.php" method="post">
                            Votre description : <input type = "text" name = "description"><br />
                            <input type = "submit" value = "Envoyer">
                        </form>

                        <p> <strong>Description actuelle</strong> <?php
                            require_once '../model/ModelAccueil.php';
                            echo ModelAccueil::getDescription();
                            ?></p>
                     </div>
                </div>
            </div>

            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <form action="../controller/ControllerImages.php" method="post" enctype="multipart/form-data">
                            <h2>Editer image accueil</h2>
                            <label for="fileUpload">Fichier:</label>
                            <input type="file" name="photo" id="fileUpload">
                            <input type="submit" name="submit" value="Upload">
                            <p> <strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
                            <p> <strong>Image actuelle</strong>
                             <?php
                             require_once '../model/ModelAccueil.php';
                             $adresse = ModelAccueil::getImage();

                             $adresse = '../'.$adresse;
                             $res = str_replace(' ', '', $adresse);
                             echo "<img src=\"$res\" alt =\"n1\">";
                             ?>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
    </footer>

</html>