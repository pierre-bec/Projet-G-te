<?php
	require_once('../model/ModelChambre.php');


			if (empty($_POST)){
				echo"tableau vide";
			}
			else {
				$chambre1 = new ModelChambre($_POST["description"]);
				$chambre1->save();
				$chambre1->afficher();
			}
		
	
	
?>