<?php
class View {
    function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false){
		if (file_exists('views/' . $name . '.php'))
         require 'views/' . $name . '.php';
	}

}