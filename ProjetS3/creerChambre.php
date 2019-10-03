<?php  
	if (empty($_POST)){
		echo"tableau vide";
	}
	else {
		require_once("chambre.php"); 
		$chambre1 = new chambre($_POST["description"]);
		$chambre1->save();
		$chambre1->afficher();
	}
?>