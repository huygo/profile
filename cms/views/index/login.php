<!--
// Project: Thuong Hieu Web CMS - 2019, Module login
// Vendor: VDATA
// Author: Tran Hai
// Created date: 27 July 2019
// Last modified 27 July 2019 by Tran Hai
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Thương Hiệu Web CMS - Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="<?php echo CMS ?>/">
    <meta name="keywords" content="Not defined" />
    <link href="template/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="template/css/style.css" rel='stylesheet' type='text/css' />
    <link href="template/css/font-awesome.css" rel="stylesheet">
    <style>
    .cbp-spmenu-push div#page-wrapper {
        margin: 0 !important;
    }
    </style>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body class="cbp-spmenu-push">
    <div class="main-content">
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page login-page ">
                <h3 class="title1">Hệ quản trị nội dung website <br> Thương Hiệu Web CMS 4.0</h3>
                <div class="widget-shadow">
                    <div class="login-top">
                        <h4>Bạn chưa phải là thành viên? <a href="signup.html">  Sign up now!</a> </h4>
                    </div>
                    <div class="login-body">
                        <form method="post" action="">
                            <input type="text" class="user" name="email" placeholder="Enter your email" required="">
                            <input type="password" name="password" class="lock" placeholder="password">
                            <input type="submit" name="Sign In" value="Sign In">
                            <div class="forgot-grid">
                                <label class="checkbox">
                                    <input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
                                <div class="forgot">
                                    <a href="#">forgot password?</a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="login-page-bottom">
                    <h5> - OR -</h5>
                    <div class="social-btn"><a href="#"><i class="fa fa-facebook"></i><i>Sign In with Facebook</i></a></div>
                    <div class="social-btn sb-two"><a href="#"><i class="fa fa-twitter"></i><i>Sign In with Twitter</i></a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
