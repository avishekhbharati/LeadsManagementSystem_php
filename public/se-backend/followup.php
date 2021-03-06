<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>Follow Up | Lead Management System</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Dashboard" />
        <meta name="keywords" content="admin,dashboard" />

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
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" rel="stylesheet" />
        <!--<link href="assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>-->

        <!--date-->
        <link href="assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/x-editable/inputs-ext/address/address.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <!--<link href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>-->

        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>

        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
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
        </div><!-- header -->


        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-details">
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

        </div><!-- Sidebar Menu -->

        <div class="page-inner">
            <div class="page-title">
                <h3>Follow Up Lead</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Lead Information</h4>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="input-fullname" class="col-sm-2 ">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-fullname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-followup" class="col-sm-2 ">Follow Up Count</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-followup">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-email" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input-contact" class="col-sm-2 ">Contact</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-contact">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 ">Lead Feedback</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-status" class="col-sm-2 ">Next Reschedule</label>
                                        <div class="col-sm-10">
                                            <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth" class="editable editable-click">15/05/1984</a>
                                        </div>
                                    </div>

                                    <button class="btn btn-success" type="button">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row -->
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
    <script src="assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>

    <!--form dropdown-->
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/js/pages/form-select2.js"></script>


    <!--date-->
    <script src="assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
    <script src="assets/plugins/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
    <script src="assets/plugins/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
    <script src="assets/plugins/x-editable/inputs-ext/address/address.js"></script>
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/modern.min.js"></script>
    <script src="assets/js/pages/form-x-editable.js"></script>
</body>
</html>
