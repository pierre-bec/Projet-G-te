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
                    <div> <a class="menu" href="./index.php"> Accueil </a> </div>
                    <div> <a class="menu" href="./Admin.html"> Admin </a> </div>
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

    <!-- Chambres d'hôtes -->
    <div class="row">
        <h2> Nos chambres d'hôtes </h2>
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <p id="description">
                        <?php
                        require_once 'Model.php';
                        echo "Connexion réussie !" ;
                        // require_once 'descritption_A.php';
                        // $desc = new descritption_A();
                       //  $desc = descritption_A::getDescription();
                       // $desc->afficher();
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Localisation -->
    <div class="row">
        <h2> Localisation </h2>
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23100.06591789463!2d3.841919197253416!3d43.6375931681022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe71ac4369b4c6da2!2sInformatique%20-%20Iut%20Montpellier!5e0!3m2!1sen!2sfr!4v1569506158532!5m2!1sen!2sfr" width="1250" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

<footer>
</footer>
</html>
