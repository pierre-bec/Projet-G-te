<!DOCTYPE html>

<html>
    <head>
        <title>Location chambre d'hôtes</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="../styles.css">
    </head>

    <body>
        <div class="container" id="wrapper">

            <!-- Menu -->
            <div class="center">
                <nav class="nav-wrapper white">
                    <div >
                        <ul class="left hide-on-med-and-down">
                            <li><a class="black-text" href="./index.php">Accueil</a></li>
                            <li><a class="black-text" href="./index.php?action=admin">Admin</a></li>
                            <li><a class="black-text" href="./index.php?action=chambre">Chambre</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h3>Accueil</h3>
                        <form action = "../index.php?action=adminDesc" method="post">
                            Votre description : <input type = "text" name = "description"><br />
                            <input type = "submit" value = "Envoyer">
                        </form>
                        <div class="description">
                            <p> <strong>Description actuelle</strong> <?php
                                echo $description1;
                                ?></p>
                        </div>
                        <br/>
                        <h3>Chambre N°1</h3>
                        <form action = "../index.php?action=adminDescC1" method="post">
                            Votre description : <input type = "text" name = "description"><br />
                            <input type = "submit" value = "Envoyer">
                        </form>
                        <div class="description">
                            <p> <strong>Description actuelle</strong> <?php
                                echo $description2;
                                ?></p>
                        </div>
                     </div>
                </div>
            </div>

            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h3>Accueil</h3>
                        <form action="../index.php?action=adminImageA" method="post" enctype="multipart/form-data">
                            <label for="fileUpload">Fichier:</label>
                            <input type="file" name="photo" id="fileUpload">
                            <input type="submit" name="submit" value="Upload">
                            <p> <strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
                            <div class="image">
                                <p> <strong class="texte_image">Image d'accueil actuelle :</strong>
                                    <?php
                                    $res = str_replace(' ', '', $image1);
                                    echo "<img src=\"$res\" alt =\"n1\" style=\"width:50%\">";
                                    ?>
                                </p>
                            </div>
                        </form>
                        <h3>Chambre N°1</h3>
                        <form action="../index.php?action=adminImageC1" method="post" enctype="multipart/form-data">
                            <label for="fileUpload">Fichier:</label>
                            <input type="file" name="photo" id="fileUpload">
                            <input type="submit" name="submit" value="Upload">
                            <p> <strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
                            <div class="image">
                                <p> <strong class="texte_image">Image d'accueil actuelle :</strong>
                                    <?php
                                    $res = str_replace(' ', '', $image2);
                                    echo "<img src=\"$res\" alt =\"n1\" style=\"width:50%\">";
                                    ?>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
    </footer>

</html>