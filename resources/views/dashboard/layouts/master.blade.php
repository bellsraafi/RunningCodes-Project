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
	@yield('search')
    <main class="page-content content-wrap">
    @if(Auth::guard()->check())
        @include('dashboard.headers.header')
        @include('dashboard.sidebars.sidebar')
        @yield('content')
    @endif
    <!-- include('dashboard.footer') -->	
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