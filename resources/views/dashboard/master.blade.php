<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name', 'RunningCodes Project') }} | Dashboard</title>
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />
    
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="/plugins/pace-master/themes/green/pace-theme-flash.css" rel="stylesheet"/>
    <link href="/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
    <link href="/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
    <link href="/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
    <link href="/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
    <link href="/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
    <link href="/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
    <link href="/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
    	
    <!-- Theme Styles -->
    <link href="/css/modern.css" rel="stylesheet" type="text/css"/>
    <link href="/css/themes/blue.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="/css/custom.css" rel="stylesheet" type="text/css"/>
    
    <script src="/plugins/3d-bold-navigation/js/modernizr.js"></script>
    <script src="/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
</head>
<body>
	<div class="overlay"></div>
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
	    <h3><span class="pull-left">Chat</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="fa fa-times"></i></a></h3>
	    <div class="slimscroll">
	        <a href="javascript:vo" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Sandra smith<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>Amily Lee<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Christopher Palmer<small>Hi! How're you?</small></span></a>
	        <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Hi! How're you?</small></span></a>
	    </div>
	</nav>
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3><span class="pull-left">Sandra Smith</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
        <div class="slimscroll chat">
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Hi There!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Hi! How are you?
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Fine! do you like my project?
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Yes, It's clean and creative, good job!
                </div>
            </div>
            <div class="chat-item chat-item-left">
                <div class="chat-image">
                    <img src="assets/images/avatar2.png" alt="">
                </div>
                <div class="chat-message">
                    Thanks, I tried!
                </div>
            </div>
            <div class="chat-item chat-item-right">
                <div class="chat-message">
                    Good luck with your sales!
                </div>
            </div>
        </div>
        <div class="chat-write">
            <form class="form-horizontal" action="javascript:void(0);">
                <input type="text" class="form-control" placeholder="Say something">
            </form>
        </div>
	</nav>
	<div class="menu-wrap">
        <nav class="profile-menu">
            <div class="profile"><img src="assets/images/avatar1.png" width="52" alt="David Green"/><span>David Green</span></div>
            <div class="profile-menu-list">
                <a href="#"><i class="fa fa-star"></i><span>Favorites</span></a>
                <a href="#"><i class="fa fa-bell"></i><span>Alerts</span></a>
                <a href="#"><i class="fa fa-envelope"></i><span>Messages</span></a>
                <a href="#"><i class="fa fa-comment"></i><span>Comments</span></a>
            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <form class="search-form" action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
            </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
    	<div class="navbar"><!-- start of Navbar -->
    		<div class="navbar-inner">
    			<div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="{{url('/welcome')}}" class="logo-text"><span><img src="/images/12/logo-50x50.jpg" width="30" height="30"> RC Project</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                	<div class="top-menu">
                		<ul class="nav navbar-nav navbar-left">
                            <li>		
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                            </li>
                            <li>
                                <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
                            </li>
                            <li>		
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <i class="fa fa-cogs"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Header 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-header-check" checked>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Fixed Sidebar 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Horizontal bar 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Toggle Sidebar 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Compact Menu 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right compact-menu-check">
                                                </div>
                                            </li>
                                            <li class="no-link" role="presentation">
                                                Hover Menu 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right hover-menu-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Boxed Layout 
                                                <div class="ios-switch pull-right switch-md">
                                                    <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="li-group">
                                        <ul class="list-unstyled">
                                            <li class="no-link" role="presentation">
                                                Choose Theme Color
                                                <div class="color-switcher">
                                                    <a class="colorbox color-blue" href="?theme=blue" title="Blue Theme" data-css="blue"></a>
                                                    <a class="colorbox color-green" href="?theme=green" title="Green Theme" data-css="green"></a>
                                                    <a class="colorbox color-red" href="?theme=red" title="Red Theme" data-css="red"></a>
                                                    <a class="colorbox color-white" href="?theme=white" title="White Theme" data-css="white"></a>
                                                    <a class="colorbox color-purple" href="?theme=purple" title="purple Theme" data-css="purple"></a>
                                                    <a class="colorbox color-dark" href="?theme=dark" title="Dark Theme" data-css="dark"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="no-link"><button class="btn btn-default reset-options">Reset Options</button></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>	
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right">4</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 4 new  messages !</p></li>
                                    <li class="dropdown-menu-list slimscroll messages">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="/images/avatar2.png" alt=""></div>
                                                    <p class="msg-name">Sandra Smith</p>
                                                    <p class="msg-text">Hey ! I'm working on your project</p>
                                                    <p class="msg-time">3 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="/images/avatar4.png" alt=""></div>
                                                    <p class="msg-name">Amily Lee</p>
                                                    <p class="msg-text">Hi David !</p>
                                                    <p class="msg-time">8 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="/images/avatar3.png" alt=""></div>
                                                    <p class="msg-name">Christopher Palmer</p>
                                                    <p class="msg-text">See you soon !</p>
                                                    <p class="msg-time">56 minutes ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="/images/avatar5.png" alt=""></div>
                                                    <p class="msg-name">Nick Doe</p>
                                                    <p class="msg-text">Nice to meet you</p>
                                                    <p class="msg-time">2 hours ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online on"></div><img class="img-circle" src="/images/avatar2.png" alt=""></div>
                                                    <p class="msg-name">Sandra Smith</p>
                                                    <p class="msg-text">Hey ! I'm working on your project</p>
                                                    <p class="msg-time">5 hours ago</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="msg-img"><div class="online off"></div><img class="img-circle" src="/images/avatar4.png" alt=""></div>
                                                    <p class="msg-name">Amily Lee</p>
                                                    <p class="msg-text">Hi David !</p>
                                                    <p class="msg-time">9 hours ago</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-success pull-right">3</span></a>
                                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                    <li><p class="drop-title">You have 3 pending tasks !</p></li>
                                    <li class="dropdown-menu-list slimscroll tasks">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-success"><i class="icon-user"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                    <p class="task-details">New user registered.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-danger"><i class="icon-energy"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">24min ago</span>
                                                    <p class="task-details">Database error.</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="task-icon badge badge-info"><i class="icon-heart"></i></div>
                                                    <span class="badge badge-roundless badge-default pull-right">1h ago</span>
                                                    <p class="task-details">Reached 24k likes</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                    <span class="user-name">David<i class="fa fa-angle-down"></i></span>
                                    <img class="img-circle avatar" src="/images/avatar1.png" width="40" height="40" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-list" role="menu">
                                    <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                    <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                                    <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
                                    <li role="presentation"><a href="login.html"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="login.html" class="log-out waves-effect waves-button waves-classic">
                                    <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                                    <i class="fa fa-comments"></i>
                                </a>
                            </li>
                        </ul><!-- Nav -->
                	</div>
                </div>
    		</div>
    	</div><!-- end of NaSvbar -->
    	<div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll"><!-- start of Page Sidebar -->
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                        <a href="javascript:void(0);" id="profile-menu-link">
                            <div class="sidebar-profile-image">
                                <img src="/images/avatar1.png" class="img-circle img-responsive" alt="">
                            </div>
                            <div class="sidebar-profile-details">
                                <span>David Green<br><small>Art Director</small></span>
                            </div>
                        </a>
                    </div>
                </div>
                <ul class="menu accordion-menu">
                    <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                    <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>
                    <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Mailbox</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="inbox.html">Inbox</a></li>
                            <li><a href="message-view.html">View Message</a></li>
                            <li><a href="compose.html">Compose</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- end of Page Sidebar Inner -->
        </div><!-- end of Page Sidebar -->
        <div class="page-inner"><!-- start of Page Inner -->
            <div class="page-title">
                <h3>Dashboard</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div><!-- end of Page Inner -->
    </main><!-- end of Page Content -->
	<!-- Javascripts -->
    <script src="/plugins/jquery/jquery-2.1.3.min.js"></script>
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/plugins/pace-master/pace.min.js"></script>
    <script src="/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/plugins/switchery/switchery.min.js"></script>
    <script src="/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="/plugins/offcanvasmenueffects/js/classie.js"></script>
    <script src="/plugins/offcanvasmenueffects/js/main.js"></script>
    <script src="/plugins/waves/waves.min.js"></script>
    <script src="/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="/plugins/jquery-counterup/jquery.counterup.min.js"></script>
    <script src="/plugins/toastr/toastr.min.js"></script>
    <script src="/plugins/flot/jquery.flot.min.js"></script>
    <script src="/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/plugins/curvedlines/curvedLines.js"></script>
    <script src="/plugins/metrojs/MetroJs.min.js"></script>
    <script src="/js/modern.js"></script>
    <script src="/js/pages/dashboard.js"></script>
</body>
</html>