<?php
class File {
	public static function build_path($path_array) {
	    $ROOT_FOLDER = "/home/projetgikv/www";
	    return $ROOT_FOLDER. '/' . join('/', $path_array);
	}
}
?>