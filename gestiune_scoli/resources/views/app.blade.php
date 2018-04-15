<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestiune Scoli</title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.css') }}">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <link href="{{ url('css/isotope.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ url('skin/default.css') }}" rel="stylesheet">
    <script src="{{ url('js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen"></script>

    <link href="{{ url('css/styleSideBar.css') }}" rel="stylesheet">

</head>

<body>

    @section('user_menu')

        <div class="wrapper">
            @if (Auth::check())
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>MENIU</h3>
                        <strong>Meniu</strong>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="{{ url('istoric') }}">
                                <i class="fa fa-1x fa-home"></i>
                                Istoric
                            </a>
                        </li>

                        <li>
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                                <i class="fa fa-1x fa-folder"></i>
                                Informatii patrimoniale
                            </a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li><a href="{{ url('cladiri_arondate') }}">Cladiri arondate</a></li>
                                <li><a href="{{ url('reparatii') }}">Reparatii</a></li>
                                <li><a href="#">Investitii</a></li>
                                <li><a href="#">Avarii</a></li>
                                <li><a href="#">Utilitati</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-1x fa-user"></i>
                                Organizare interna
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('contact') }}">
                                <i class="fa fa-1x fa-phone contact"></i>
                                Contact
                            </a>
                        </li>

                    </ul>

                    <ul class="list-unstyled components">
                        <li>
                            <a href="{{ url('adaugare_scoala') }}">
                                <i class="fa fa-1x fa-plus"></i>
                                Adaugare scoala
                            </a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                                <i class="fa fa-1x fa-wrench"></i>
                                Modificare date
                            </a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li><a href="#">Scoala</a></li>
                                <li><a href="#">Istoric</a></li>
                                <li><a href="#">Cladiri arondate</a></li>
                                <li><a href="#">Reparatii</a></li>
                                <li><a href="#">Investitii</a></li>
                                <li><a href="#">Avarii</a></li>
                                <li><a href="#">Utilitati</a></li>
                                <li><a href="#">Organizare interna</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="list-unstyled components">
                        <li>
                            <a href="{{ url('home') }}">
                                <i class="fa fa-1x fa-building"></i>
                                Selecteaza alta scoala
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('logout') }}">
                                <i class="fa fa-1x fa-sign-out"></i>
                                Logout
                            </a>
                        </li>
                    </ul>

                </nav>
            @endif


                @yield('content')

        </div>
    @show


    @section('login_menu')
        <section id="header" class="appear"></section>
        <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:50px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">
                        <img class="img-fluid" src="{{ URL::to('img/stema_pmt.jpg') }}">-->
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    @if (Auth::check())
                        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                            <li class><a href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                            <li class><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Register</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </div>

        @yield('content_visitor')

    @show


    <script src="{{ url('js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ url('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('js/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ url('js/skrollr.min.js') }}"></script>
    <script src="{{ url('js/jquery.scrollTo.js') }}"></script>
    <script src="{{ url('js/jquery.localScroll.js') }}"></script>
    <script src="{{ url('js/stellar.js') }}"></script>
    <script src="{{ url('js/jquery.appear.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>


</body>

</html>