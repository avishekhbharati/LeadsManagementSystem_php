<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title>Manage Lead | Lead Management System</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Dashboard" />
        <meta name="keywords" content="admin,dashboard" />

        <!-- Styles -->
        <link href='../../fonts.googleapis.com/csse092.css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	

        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

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
                <div class="logo-box">
                    <a href="main.html" class="logo-text"><span>LMS</span></a>
                </div><!-- Logo Box -->

                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>		
                                <h1>Lead Management System</h1>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->
        
        <div class="page-sidebar sidebar">
            <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile"><div class="sidebar-profile-details">
                                <span>Mr. Avisekh Bharati<br><small>Lead Counselor</small></span>
                            </div>
                    </div>
                </div>
                <ul class="menu accordion-menu">

                    <li><a href="main.html"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                    <li><a href="add-lead.html"><span class="menu-icon glyphicon glyphicon-pencil"></span><p>Add Lead</p></a></li>
                    <li><a href="manage-lead.html"><span class="menu-icon glyphicon glyphicon-user"></span><p>Manage Lead</p></a></li>
                    <li><a href="login.html"><span><i class="menu-icon glyphicon glyphicon-eject"></i></span><p>Log Out</p></a></li>
                    <li class="line"></li> 


                    <li class="line"></li>

                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->
        </div><!-- Page Sidebar -->
        <div class="page-inner">
            <div class="page-title">
                <h3>Manage Leads</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <a href="add-lead.html"><button class="btn btn-success" type="button">Add New +</button></a>
                            </div>
                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dueToday" class="display table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>SNo</th>
                                                <th>Full Name</th><th>Lead Status</th>
                                                <th>Follow Up Count</th>
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>SNo</th>
                                                <th>Full Name</th><th>Lead Status</th>
                                                <th>Follow Up Count</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Himansu Hamal</td>
                                                <td>Active</td>
                                                <td>3</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Avisekh Bharati</td>
                                                <td>Active</td>
                                                <td>2</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            <tr>
                                                <td>3</td>
                                                <td>Dipak Bhattarai</td>
                                                <td>Active</td>
                                                <td>4</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Bhushan Pokharel</td>
                                                <td>Active</td>
                                                <td>5</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Suresh Thapa Magar</td>
                                                <td>Active</td>
                                                <td>4</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Muskan Paudel</td>
                                                <td>Active</td>
                                                <td>3</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Pranish Shrestha</td>
                                                <td>Active</td>
                                                <td>2</td>
                                                <td>
                                                    <a href="edit-lead.html">
                                                        Edit
                                                    </a> 
                                                    |
                                                    <a href="lead-detail.html">
                                                        Detail
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>  
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p class="no-s">By Avisekh Bharati | Bhushan Pokharel | Himansu Hamal | Deepak Bhattarai</p>
            </div>
        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/pace-master/pace.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
    <script src="assets/plugins/waves/waves.min.js"></script>
    <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="assets/js/modern.min.js"></script>

</body>
</html>
