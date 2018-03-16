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

    <link href="{{ url('css/styleSideBar.css') }}" rel="stylesheet">

    {{--<script src="{{ url('js/jquery-3.3.1.js') }}"></script>--}}
    <script src="{{ url('js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen"></script>
</head>

<body>

    @section('with_menu')
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>MENIU</h3>
                    <strong>BS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Istoric
                        </a>
                    </li>

                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-home"></i>
                            Informatii patrimoniale
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Cladiri arondate</a></li>
                            <li><a href="#">Reparatii</a></li>
                            <li><a href="#">Investitii</a></li>
                            <li><a href="#">Avarii</a></li>
                            <li><a href="#">Utilitati</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Organizare interna
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Contact
                        </a>
                    </li>

                </ul>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Adaugare scoala
                        </a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Modificare date
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="list-unstyled components">
                    <li>
                        <a href="#" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Logout
                        </a>
                    </li>
                </ul>

            </nav>

            @yield('content')

        </div>

    @show


    {{--<div class="container">--}}
        @yield('without_menu')
    {{--</div>--}}

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