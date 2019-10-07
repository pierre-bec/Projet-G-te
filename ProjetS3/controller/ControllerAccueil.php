<?php

	require_once '../model/ModelAccueil.php';
	
			ModelAccueil::modifDesc($_POST['description']);
	
			require ('../view/Admin.php');
		
?>	

		




