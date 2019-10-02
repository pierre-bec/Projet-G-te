<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> changer desc </title>
</head>

<body>
<?php
require_once 'model.php';

$desc = new descritption_A($_GET['descritption']);
$desc->modifDesc();

echo "<br>";


?>
</body>
</html>