<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merinda - HTML Bootstrap Template Like Medium Blog Platform</title>
    <!--favincon-->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap, Font Awesome, Aminate, Owl Carausel, Normalize CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- Site CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/widgets.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/color-default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">



    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=B612+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Icons fonts-->
    <link href="{{asset('assets/css/fontello.css')}}" rel="stylesheet">
</head>
<body class="archive">
<div class="top-scroll-bar"></div>
<!--Mobile navigation-->
<div class="sticky-header fixed d-lg-none d-md-block">
    <div class="text-right">
        <div class="container mobile-menu-fixed pr-5">
            <h1 class="logo-small navbar-brand"><a href="/" class="logo">Merinda</a></h1>

            <a class="author-avatar" href="#"><img src="assets/images/author-avata-1.jpg" alt=""></a>

            <ul class="social-network heading navbar-nav d-lg-flex align-items-center">
                <li><a href="#"><i class="icon-facebook"></i></a></li>
            </ul>

            <a href="javascript:void(0)" class="menu-toggle-icon">
                <span class="lines"></span>
            </a>
        </div>
    </div>

    <div class="mobi-menu">
        <div class="mobi-menu__logo">
            <h1 class="logo navbar-brand"><a href="/" class="logo">Merinda</a></h1>
        </div>
        <form action="#" method="get" class="menu-search-form d-lg-flex">
            <input type="text" class="search_field" placeholder="Search..." value="" name="s">
        </form>
        <nav>
            <ul>
                <li class="current-menu-item"><a href="/">Home</a></li>
                <li class="menu-item-has-children"><a href="categories.html">Categories</a>
                    <ul class="sub-menu">
                        <li><a href="categories.html">Politics</a></li>
                        <li><a href="categories.html">Health</a></li>
                        <li><a href="categories.html">Design</a></li>
                    </ul>
                </li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="categories.html">Politics</a></li>
                <li><a href="categories.html">Health</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--Mobile navigation-->
<div id="wrapper">
    @include('layout.header')
    <main id="content">
        @yield('content')
    </main>
    <footer class="mt-5">
        <div class="container">
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-6 copyright text-xs-center">
                    <p>Copyright &copy; 2021 Merinda inc. Designed by <a href="https://alithemes.com">AliThemes.com</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="social-network inline text-md-right text-sm-center">
                        <li class="list-inline-item"><a href="#"><i class="icon-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div> <!--#wrapper-->

<a href="#" class="back-to-top heading"><i class="icon-left-open-big"></i><span class="d-lg-inline d-md-none">Top</span></a>

<!--Scripts-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/theia-sticky-sidebar.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
