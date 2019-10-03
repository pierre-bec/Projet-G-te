<?php
require_once 'Model.php';

require_once 'Accueil.php';

Accueil::modifDesc($_POST['description']);

header('Location: http://projetgiteiut.fr/Admin.html');
exit();




