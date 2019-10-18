<?php
	$action = $_GET["action"];

	if (empty($action)) {
		require_once File::build_path(array('controller','ControllerAccueil.php'));
		ControllerAccueil::build_default();
	}
	if ($action == "admin") {
		require_once File::build_path(array('controller','ControllerAdmin.php'));
		ControllerAdmin::build();
	}
	if ($action == "chambre") {
		require_once File::build_path(array('controller','ControllerChambre.php'));
		ControllerChambre::build_chambre();
	}
	if ($action == "adminDesc") {
		require_once File::build_path(array('controller','ControllerAdmin.php'));
		ControllerAdmin::modifDesc(1);
	}
if ($action == "adminDescC1") {
    require_once File::build_path(array('controller','ControllerAdmin.php'));
    ControllerAdmin::modifDesc(2);
}
	if ($action == "adminImageA") {
		require_once File::build_path(array('controller','ControllerAdmin.php'));
		ControllerAdmin::modifImage(1);
	}
if ($action == "adminImageC1") {
    require_once File::build_path(array('controller','ControllerAdmin.php'));
    ControllerAdmin::modifImage(2);
}
?>