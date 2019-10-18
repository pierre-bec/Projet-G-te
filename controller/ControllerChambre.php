<?php
	require_once (File::build_path(array('model','ModelPage.php')));
	
	class ControllerChambre{

		public static function build_chambre() {
	        $description = ModelPage::getDescription(2);
	        $image = ModelPage::getImage(2);
	        require File::build_path(array('view','head.html'));
	        require File::build_path(array('view','menu.html'));
	        require File::build_path(array('view','carrousel.php'));
	        require File::build_path(array('view','description.php'));
	        require File::build_path(array('view','planningReservation.html'));
	        require File::build_path(array('view','formulaireReservation.html'));
	        require File::build_path(array('view','footer.html'));
    	}
	}
			
?>