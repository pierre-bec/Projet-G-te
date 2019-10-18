<?php

    require_once (File::build_path(array('model','ModelPage.php')));
	require_once (File::build_path(array('model','ModelAdmin.php')));

	
	class ControllerAdmin{

		public static function build() {
	        $description1 = ModelPage::getDescription(1);
            $description2 = ModelPage::getDescription(2);
            $image1 = ModelPage::getImage(1);
            $image2 = ModelPage::getImage(2);
	        require File::build_path(array('view','Admin.php'));
    	}
    	public static function modifDesc($id) {
    		ModelAdmin::modifDesc($_POST["description"],$id);
            $description1 = ModelPage::getDescription(1);
            $description2 = ModelPage::getDescription(2);
	        $image1 = ModelPage::getImage(1);
            $image2 = ModelPage::getImage(2);
	        require File::build_path(array('view','Admin.php'));
    	}
    	public static function modifImage($id) {
    		ModelAdmin::modifImage($_POST["file"],$id);
            $description1 = ModelPage::getDescription(1);
            $description2 = ModelPage::getDescription(2);
            $image1 = ModelPage::getImage(1);
            $image2 = ModelPage::getImage(2);
	        require File::build_path(array('view','Admin.php'));
    	}
	}
			
?>