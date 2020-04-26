<!-- Project: Thuong Hieu Web CMS - 2019, Header -->
<!DOCTYPE HTML>
<html>
<head>
    <title>Thương Hiệu Web - CMS 4.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <base href="<?php echo CMS ?>/">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="template/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="template/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="template/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
  	<script type="text/javascript" src="ckeditor/ckfinder/ckfinder.js"></script>

    <script src="template/js/jquery-1.11.1.min.js"></script>
    <script src="template/js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="template/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="template/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- chart -->
    <script src="template/js/Chart.js"></script>
    <!-- //chart -->
    <!--Calender-->
    <link rel="stylesheet" href="template/css/clndr.css" type="text/css" />
    <script src="template/js/underscore-min.js" type="text/javascript"></script>
    <script src="template/js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="template/js/clndr.js" type="text/javascript"></script>
    <script src="template/js/site.js" type="text/javascript"></script>
    <!--End Calender-->
    <!-- Metis Menu -->
    <script src="template/js/metisMenu.min.js"></script>
    <script src="template/js/custom.js"></script>
    <link href="template/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                    <ul class="nav" id="side-menu">
                    <?php if($_SESSION['user']['chuc_vu']=='admin') { ?>
                        <li>
                            <a href="" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="thongtin"><i class="fa fa-book nav_icon"></i>Thông tin</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-th-large nav_icon"></i>Giao diện  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="menu">Menu </a></li>
                                <li><a href="banner">Banner </a></li>
                                <li><a href="com">Thành phần khác</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-file-text-o nav_icon"></i>Bài viết<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="danhmuc">Danh mục <span class="nav-badge-btm">02</span></a></li>
                                <li><a href="baiviet">Bài viết <span class="nav-badge-btm">02</span></a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-bar-chart nav_icon"></i>Sản phẩm <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="cate">Danh mục <span class="nav-badge-btm">02</span></a></li>
                                <li><a href="sanpham">Sản phẩm <span class="nav-badge-btm">02</span></a></li>
                                <li><a href="dmtemp">Danh mục template</a></li>
                                <li><a href="temp">Template</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-cogs nav_icon"></i>Cài đặt<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="media">Media</a></li>
                                <li><a href="user">Users</a></li>
                                <li><a href="khachhang">Khách hàng</a></li>
                                <li><a href="dangki">Đăng kí</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="quatrinh"><i class="fa fa-table nav_icon"></i>Quá trình</a>
                        </li>
                        <li>
                            <a href="kinhnghiem"><i class="fa fa-table nav_icon"></i>Kinh nghiệm</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <!--logo -->
                <div class="logo">
                    <a href="index.html">
                        <h1>CMS 4.0</h1>
                        <span>AdminPanel</span>
                    </a>
                </div>
                <!--//logo-->
                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search"
                            id="input-31" name="tukhoa" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                            </svg>
                        </label>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">
                <div class="profile_details_left">
                    <!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li class="odd">
                                    <a href="#">
                                        <div class="user_img"><img src="images/2.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user_img"><img src="images/3.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user_img"><img src="images/2.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li class="odd">
                                    <a href="#">
                                        <div class="user_img"><img src="template/images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user_img"><img src="images/3.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending task</h3>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar green" style="width:90%;"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar red" style="width: 33%;"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar  blue" style="width: 80%;"></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending tasks</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="<?php echo $_SESSION['user']['hinh_anh'] ?>" alt="admin" height="50"> </span>
                                    <div class="user-name">
                                        <p><?php echo $_SESSION['user']['name'] ?></p>
                                        <span><?php echo $_SESSION['user']['name'] ?></span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="index/profile"><i class="fa fa-cog"></i> Profile</a> </li>
                                <li> <a href="index/doimatkhau"><i class="fa fa-user"></i> Đổi mật khẩu</a> </li>
                                <li> <a href="index/logout"><i class="fa fa-sign-out"></i> Đăng xuất</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->
