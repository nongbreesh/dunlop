<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <title>Dunlop Admin Ver.1.0 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url() ?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url() ?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url() ?>public/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url() ?>public/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo base_url() ?>public/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url() ?>public/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url() ?>public/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url() ?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url() ?>public/js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <link href="<?php echo base_url() ?>public/css/style.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Dunlop Admin 
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo base_url() ?>public/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?= $account['admin_username'] ?>  - <?= $account['admin_fullname'] ?>
                                        <small>Lastest logout <?= time_ago($account['admin_logout']) ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url() ?>logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url() ?>public/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?= $account['admin_username'] ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..." value="<?php
                            if (!empty($q)) {
                                echo $q;
                            }
                            ?>"/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' value="excute" id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li <?= is_menu_active($menu, "home"); ?>  >
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="treeview ">
                            <a href="#">
                                <i class="fa  fa-tag"></i>
                                <span>Contents</span> <small class="badge pull-right bg-green">new</small>
                                <i class="fa pull-right fa-angle-down"></i>
                            </a>
                            <ul class="treeview-menu" style="display: block;">
                                <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Home</a>
                                    <ul class="treeview-menu" style="display: block;">
                                        <li <?= is_menu_active($menu, "home_highlight"); ?>><a href="<?= base_url() ?>home/highlight" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Highlight news</a></li>
                                        <li <?= is_menu_active($menu, "home_whatnews"); ?>><a href="<?= base_url() ?>home/whatnews" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> What news</a></li>
                                        <li <?= is_menu_active($menu, "home_video"); ?>><a href="<?= base_url() ?>home/video" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Video</a></li>
                                        <li <?= is_menu_active($menu, "home_slide"); ?>><a href="<?= base_url() ?>home/slide" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Slide</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Product</a>
                                    <ul class="treeview-menu" style="display: block;">
                                        <li <?= is_menu_active($menu, "product_category"); ?> ><a href="<?= base_url() ?>product/category" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Group</a></li>

                                        <li <?= is_menu_active($menu, "product_type"); ?> ><a href="<?= base_url() ?>product/type" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Type</a></li>
                                        <li <?= is_menu_active($menu, "product_item"); ?>><a href="<?= base_url() ?>product/item" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Product</a></li>
                                        <li <?= is_menu_active($menu, "product_tire"); ?>><a href="<?= base_url() ?>product/tire" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Tire</a></li>

                                    </ul></li>
                                <!--
                            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tire Knowledge</a>
                                <ul class="treeview-menu" style="display: block;">
                                    <li <?= is_menu_active($menu, "knowledge_category"); ?>><a href="<?= base_url() ?>knowledge/category" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Categories</a></li>
                                    <li <?= is_menu_active($menu, "knowledge_article"); ?>><a href="<?= base_url() ?>knowledge/article" style="margin-left: 40px;"><i class="fa fa-angle-right"></i>  Article</a></li>
                                </ul>
                            </li>
                            <li <?= is_menu_active($menu, "about"); ?>><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> About Dunlop</a>
                            <ul class="treeview-menu" style="display: block;">
                                    <li <?= is_menu_active($menu, "about_category"); ?>><a href="<?= base_url() ?>about/category" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Categories</a></li>
                                    <li <?= is_menu_active($menu, "about_article"); ?>><a href="<?= base_url() ?>about/article" style="margin-left: 40px;"><i class="fa fa-angle-right"></i>  Article</a></li>
                                </ul></li>
                            <li <?= is_menu_active($menu, "dealeraddress"); ?>><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Dealer Address</a></li>
                            <li <?= is_menu_active($menu, "contact"); ?>><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Contact</a></li>
                                -->

                                <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Dealer</a>
                                    <ul class="treeview-menu" style="display: block;">
                                        <li <?= is_menu_active($menu, "dealer_address"); ?> ><a href="<?= base_url() ?>dealer/address" style="margin-left: 40px;"><i class="fa fa-angle-right"></i> Address</a></li>

                                    </ul>
                                </li>

                                <li><a href="<?= base_url() ?>news" style="margin-left: 10px;" <?= is_menu_active($menu, "news"); ?>><i class="fa fa-angle-double-right"></i> News</a></li>
                            </ul>
                        </li>
                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Form</span>
                                <i class="fa pull-right fa-angle-down"></i>
                            </a>
                            <ul class="treeview-menu" style="display: block;">
                                <li <?= is_menu_active($menu, "form_contact"); ?>> <a href="<?= base_url() ?>form/contact" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Contact</a></li>

                            </ul>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
