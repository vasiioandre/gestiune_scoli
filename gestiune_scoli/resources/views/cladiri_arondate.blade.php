@extends('app')

@section('content')

    <div class="container" id="cladiri_arondate">
        <div class="container page-title">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                    <div class="about-heading">
                        <h1>Cladiri arondate la C.D. Loga</h1>
                    </div>
                </div>
            </div>
        </div>



        @foreach($cladiri as $cladire)
            <div class="row my-md-5 mx-md-3" id="cladiri_arondate">
                <div class="col-md-2">
                    <div class="img-thumbnail">
                        @if ( !empty ( $cladire->fotografie ) )
                        <img src="{{ URL::to('img/' . $cladire->fotografie) }}" alt="">
                            @else
                            <i class="fa fa-5x fa-home"></i>
                        @endif
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <i class="ion-ios-location-outline"></i>
                        <h3>Nume</h3>
                        <p>{{ $cladire->nume }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div>
                        <i class="ion-ios-location-outline"></i>
                        <h3>Adresa</h3>
                        <address>{{ $cladire->adresa }}</address>
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Nr. cf</h3>
                        <p>{{ $cladire->nr_cf }}</p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

@stop


@section('login_menu')
@endsection