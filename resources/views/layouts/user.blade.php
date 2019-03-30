<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="My Blog" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('css/user-bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    {{--<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>--}}
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- animation-effect -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>
<body>
<div class="header" id="ban">
    <div class="container">
        <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
            <div class="header-search">
                <div class="search">
                    <input class="search_box" type="checkbox" id="search_box">
                    <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                    <div class="search_form">
                        <form action="#" method="post">
                            <input type="text" name="Search" placeholder="Search...">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
            @include('includes.user-navbar')
        </div>
        <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
            <ul>
                <a href="{{ route('login') }}" class="btn btn-sm btn-default">Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-danger">Register</a>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--start-main-->
<div class="header-bottom">
    <div class="container">
        <div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <h1><a href="/">STYLE BLOG</a></h1>
            <p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
        </div>
    </div>
</div>
<!-- banner -->

@yield('images')
<!-- technology-left -->
<div class="technology">
    <div class="container">
        @yield('content')
        <!-- technology-right -->
        <div class="col-md-3 technology-right">
            @include('includes.user-sidebar')
        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
</div>

@include('includes.user-footer')
<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="container">
        <p>© @php echo date('Y') @endphp Style Blog. All rights reserved | Develop by <a href="#">Freedom Coder</a></p>
    </div>
</div>
</body>
</html>