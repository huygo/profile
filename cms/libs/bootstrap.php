<?php
// Project: Thuong Hieu Web CMS - 2019
// Vendor: VDATA
// Author: Tran Hai
// Created date: 27 July 2019
// Last modified 27 July 2019 by Tran Hai

class bootstrap
{
	 function __construct()
	 {
			 if (isset($_SESSION[SID])) {
					 $url    = isset($_GET['url']) ? $_GET['url'] : null;
					 $url    = rtrim($url, '/');
					 $url    = explode('/', $url);
					 $module = (empty($url[0])) ? 'index' : $url[0];
					 if (file_exists('controllers/' . $module . '.php')) {
							 require 'controllers/' . $module . '.php';
							 $controller = new $module;
							 $controller->loadModel($module); // load model tương ứng
							 $method = (isset($url[1])) ? $url[1] : 'index';
							 if (method_exists($controller, $method)) {
									 if (isset($url[2]))
											 $controller->{$method}($url[2]);
									 else
											 $controller->{$method}();
							 } else {
								 		require 'controllers/thongbao.php';
										$controller = new thongbao;
										$controller->nomethod();
							 }
					 } else {
							 require 'controllers/thongbao.php';
							 $controller = new thongbao;
							 $controller->nomodule();
					 }
			 } else {
					 $this->view = new view();
					 if (isset($_REQUEST['email'])) {
							 $username    = $_REQUEST['email'];
							 $password    = md5(md5($_REQUEST['password']));
							 $this->db    = new database();
							 $this->model = new model();
							 $query       = $this->db->query("SELECT id,name,email,hinh_anh,chuc_vu
								 	 FROM admin WHERE tinh_trang=1 AND email = '$username' AND password  = '$password'");
							 if ($query)
									 $userdata = $query->fetchAll(PDO::FETCH_ASSOC);
							 else
									 $userdata = array();
							 if (empty($userdata)) {
									 //$this->view->loginfail = true;
									 $this->view->render('index/login');
							 } else {
									 $_SESSION[SID]    = true;
									 $_SESSION['user'] = $userdata[0];
									 $userid           = $_SESSION['user']['id'];
									 //$userip           = $_SERVER["REMOTE_ADDR"];
									 //$time             = date("Y-m-d H:i:s");
									 header('Location: '.CMS);
							 }
					 } else {
							 //$this->view->loginfail = false;
							 $this->view->render('index/login');
					 }
			 }
	 }
}











// class bootstrap
// {
// 	 function __construct()
// 	 {
// 		 //if (isset($_SESSION['loggedIn'])) {
// 			// echo 'log in';
// 				 // $url = isset($_GET['url']) ? $_GET['url'] : null;
// 				 // $url = rtrim($url, '/');
// 				 // $url = explode('/', $url);
// 				 // $module = (empty($url[0])) ? 'index' : $url[0];
// 				 // if (file_exists('controllers/' . $module . '.php')) {
// 					// 	 require 'controllers/' . $module . '.php';
// 					// 	 $controller = new $module;
// 					// 	 $controller->loadModel($module); // load model tương ứng
// 					// 	 $method = (isset($url[1])) ? $url[1] : 'index';
// 					// 	 if (method_exists($controller, $method)) {
// 					// 			 if (isset($url[2]))
// 					// 					 $controller->{$method}($url[2]);
// 					// 			 else
// 					// 					 $controller->{$method}();
// 					// 	 } else
// 					// 			 $this->error();
// 				 // } else
// 					// 	 $this->error();
// 		 //} else {
// 			// 	echo 'chuwa dang nhap';
// 		 //}
// 	 }
//
// 	 function error()
// 	 {
// 			 require 'controllers/thongbao.php';
// 			 $controller = new thongbao();
// 			 $controller->index();
// 			 return false;
// 	 }
// }
?>
