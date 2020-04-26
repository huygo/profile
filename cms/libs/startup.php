<?php

	date_default_timezone_set("Asia/Ho_Chi_Minh");

	//ini_set('display_errors', 1);

	define('SID', md5($_SERVER['HTTP_HOST'].'cms'.session_id()));

	define('CMS', 'http://'.$_SERVER['HTTP_HOST'].'/Vdata/cms');

	define('HOME', 'http://'.$_SERVER['HTTP_HOST'].'/Vdata');

	define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].'/Vdata');

	define('DB_TYPE', 'mysql');

	define('DB_HOST', 'localhost');

	define('DB_NAME', 'tainghe_db');

	define('DB_USER', 'root');

	define('DB_PASS', '');

?>

