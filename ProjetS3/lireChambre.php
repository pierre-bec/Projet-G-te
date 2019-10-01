<?php
	require_once "Model.php";
	require_once "Chambre.php";
	
	$desc = Chambre::getDescription();

	foreach  ($desc as $obj) {
	    echo $obj->afficher();
	}
?>