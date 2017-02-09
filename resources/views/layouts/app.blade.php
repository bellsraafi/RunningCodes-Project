<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RunningCodes Project') }}</title>

    <!-- Styles -->
    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
    <link href="/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/> 
    <link href="/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>  
    <link href="/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/> 
    
    <!-- Theme Styles -->
    <link href="/css/modern.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
    <link href="/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <img src="/images/12/logo-50x50.jpg" style="float: left;margin-top:5px;margin-right: 10px;">
                    <a class="navbar-brand" href="{{ url('/') }}" style="margin-top: 5px;">
                        {{ config('app.name', 'RunningCodes Project') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
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
    <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/plugins/waves/waves.min.js"></script>
    <script src="/plugins/3d-bold-navigation/js/main.js"></script>
    <script src="/js/modern.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
