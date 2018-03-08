<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>

    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.css') }}">
    <!-- <base href="{{ URL::asset('/') }}" target="_blank">-->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
   <!-- <link href="{{ url('css/feather.css') }}" rel="stylesheet">-->

    <script src="{{ url('js/jquery-3.3.1.js') }}"></script>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark mb-md-5">
        <div class="mr-auto order-0">
            <a class="navbar-brand" href="#">Selectare scoala</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="navbar-collapse collapse w-100 order-1 mx-auto" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Informatii generale <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informatii patrimoniale
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Cladiri arondate</a>
                        <a class="dropdown-item" href="#">Reparatii</a>
                        <a class="dropdown-item" href="#">Investitii</a>
                        <a class="dropdown-item" href="#">Avarii</a>
                        <a class="dropdown-item" href="#">Utilitati</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Organizare interna</a>
                </li>
            </ul>
        </div>

        <div class="mx-auto order-2">
            <a class="navbar-brand mx-auto" href="#">Log out</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>



    <div class="container">
        @yield('content')
    </div>

    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <!--<script src="{{ url('js/feather.js') }}"></script>-->
</body>

</html>