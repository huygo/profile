<?php
$thisurl  = isset($_GET['url']) ? $_GET['url'] : null;
$url  = rtrim($thisurl, '/');
$url  = explode('/', $thisurl);
$data = new model();
if ($url[0]!='') {
    if ($url[0]=='blog')
        if (sizeof($url)==3)
            $view = 'blog';
        else
            $view = 'blogdetail';
    elseif ($url[0]=='product')
        if (sizeof($url)==3)
            $view = 'product';
        else
            $view = 'productdetail';
    else
         $view = $url[0];
}
else
    $view = 'index';
$page = $data->getpage($url);
$thongtin = $data->thongtin();
//$cate = $data->homecate(0);
//$menu = functions::dequy($data->topmenu(),0,1);
$menu =$data->topmenu();
// $footerpost =$data->homepost(1);
// $footerprod =$data->homepost(2);
require('layout/header.php');
if (file_exists('views/'.$view.'.php'))
    require 'views/'.$view.'.php';
else
    echo 'Missing index file...';
require('layout/footer.php');
?>
