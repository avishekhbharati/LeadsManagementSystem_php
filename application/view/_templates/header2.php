<!DOCTYPE html>
<html>

    
<!-- Mirrored from lambdathemes.in/modern/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 22 Apr 2015 16:15:11 GMT -->
<head>
        
        <!-- Title -->
        <title>Modern | Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="LambdaThemes" />
        
        <!-- Styles -->
        <link href='../../fonts.googleapis.com/csse092.css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo URL; ?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo URL; ?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo URL; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo URL; ?>assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo URL; ?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo URL; ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<?php echo URL; ?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo URL; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo URL; ?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo URL; ?>assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>



        <body class="page-header-fixed">
    <main class="page-content content-wrap">
         
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="main.html" class="logo-text"><span>LMS</span></a>
                </div><!-- Logo Box -->


                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>        
                                <h3>Lead Management System </h3>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="<?php echo URL.'lead/logout' ?>" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- header -->
        
        
        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                            <div class="sidebar-profile-details">
                                <span><?php mysql_connect('localhost','root',''); mysql_select_db('lms'); $userid=$_SESSION['user']; $sqll=mysql_query("Select * from user where user_id='$userid'"); $res=mysql_fetch_assoc($sqll); echo $res['fname'];?><br><small>Lead Counselor</small></span>
                            </div>
                    </div>
                </div>
                <ul class="menu accordion-menu">

                    <li><a href="<?php echo URL; ?>dashboard/counselor"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                    <li><a href="<?php echo URL; ?>lead/addLead"><span class="menu-icon glyphicon glyphicon-pencil"></span><p>Add Lead</p></a></li>
                    <li><a href="<?php echo URL; ?>lead/index"><span class="menu-icon glyphicon glyphicon-user"></span><p>Manage Lead</p></a></li>
                   
                    <li class="line"></li> 


                    <li class="line"></li>

                </ul>
            </div><!-- Page Sidebar Inner -->

        </div><!-- Sidebar Menu -->