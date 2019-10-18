<?php
	require_once (File::build_path(array('model','ModelPage.php')));
	
	class ControllerAccueil{

		public static function build_default() {
	        $description = ModelPage::getDescription(1);
	        $image = ModelPage::getImage(1);
	        require File::build_path(array('view','head.html'));
	        require File::build_path(array('view','menu.html'));
	        require File::build_path(array('view','carrousel.php'));
	        require File::build_path(array('view','description.php'));
	        require File::build_path(array('view','localisation.html'));
	        require File::build_path(array('view','footer.html'));
    	}
	}
			
?>