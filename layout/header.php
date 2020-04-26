<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
       <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $page['title'] ?></title>
      <meta name="keywords" content="<?php echo $page['keywords']?>" />
      <meta name="description" content="<?php echo $page['description']?>" />
      <base href="<?php echo HOME ?>/">
      <meta property="og:url"                content="<?php echo HOME.'/'.$thisurl ?>" />
      <meta property="og:type"               content="article" />
      <meta property="og:title"              content="<?php echo $page['title'] ?>" />
      <meta property="og:description"        content="<?php echo $page['description']?>" />
      <meta property="og:image"              content="<?php echo $page['image']?>" />
      <meta property="fb:app_id"             content="239136380612573" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="template/css/bootstrap.css">
        <link rel="stylesheet" href="template/vendors/linericon/style.css">
        <link rel="stylesheet" href="template/css/font-awesome.min.css">
        <link rel="stylesheet" href="template/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="template/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="template/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="template/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="template/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="template/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="template/css/style.css">
        <link rel="stylesheet" href="template/css/responsive.css">
        <style>.noidung img{width: 100%}</style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="<?php echo $thongtin['logo']; ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="<?php echo HOME; ?>">Trang chủ</a></li> 
                <li class="nav-item"><a class="nav-link" href="gioithieu">Giới thiệu</a></li> 
                <li class="nav-item"><a class="nav-link" href="uudai">Ưu đãi</a></li> 
                <li class="nav-item"><a class="nav-link" href="dichvu">Dịch vụ</a></li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                  </ul>
                </li> 
                <li class="nav-item"><a class="nav-link" href="contact">Liên hệ</a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>




