@extends('app')

@section('content')

    <div class="container">
        <div class="container page-title">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                    <div class="about-heading">
                        <h1>Cladiri arondate la C.D. Loga</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="cladiri_arondate">
            <div class="col-md-2">
                <div class="img-thumbnail">
                    <img src="img/loga.jpg" alt="">
                </div>
            </div>

            <div class="col-md-3">
                <div>
                    <i class="ion-ios-location-outline"></i>
                    <h3>Nume</h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <i class="ion-ios-location-outline"></i>
                    <h3>Adresa</h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-3">
                <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Nr. cf</h3>
                    <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div>

        </div>
    </div>

@stop


@section('login_menu')
@endsection