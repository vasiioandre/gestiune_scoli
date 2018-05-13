@extends('app')

@section('content')
    @foreach($informatii as $informatie)
    <div class="container" id="cladiri_arondate">
        <div class="container page-title">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                    <div class="about-heading">
                        <h1>Organizare interna</h1>
                        <p align="center">{{ $informatie->nume }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-md-5 mx-md-3" id="cladiri_arondate">
            <div class="col-md-2">
                <div class="img-thumbnail">
                    @if ( !empty ( $informatie->fotografie ) )
                        <img src="{{ URL::to('img/' . $informatie->fotografie) }}" alt="">
                    @else
                        <i class="fa fa-5x fa-home"></i>
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div>
                    <i class="ion-ios-location-outline"></i>
                    <h3>Nr. elevi</h3>
                    <address>{{ $informatie->nr_elevi }}</address>
                </div>
            </div>

            <div class="col-md-3">
                <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Nr. clase</h3>
                    <p>{{ $informatie->nr_clase }}</p>
                </div>
            </div>

            <div class="col-md-3">
                <div>
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Nr. cadre didactice</h3>
                    <p>{{ $informatie->nr_cadre_didactice }}</p>
                </div>
            </div>
        </div>
    </div>

    @endforeach
@stop


@section('login_menu')
@endsection