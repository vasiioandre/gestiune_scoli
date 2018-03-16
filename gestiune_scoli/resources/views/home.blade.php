@extends('app')

@section('with_menu')
@endsection

@section('without_menu')

    <section id="header" class="appear"></section>
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:50px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars color-white"></span>
                </button>
                <a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">
                        <img class="img-fluid" src="{{ URL::to('img/stema_pmt.jpg') }}">-->--}}
                    </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                    <li class><a href="index.html">Login</a></li>
                    <li><a href="#section-about">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="featured">
    </section>

    <section id="section-contact" class="section appear clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="align-center">
                        <h1>Scoli Timisoara</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-map" class="clearfix">
        <div id="map"></div>
        <script>
            function initMap() {
                var uluru = {lat: 45.7564, lng:  21.229};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: uluru
                });
                map.setTilt(100);
                var marker = new google.maps.Marker({
                    position: {lat: 45.752968, lng: 21.234537},
                    map: map,
                });
                var marker = new google.maps.Marker({
                    position: {lat: 45.741508, lng: 21.227305},
                    map: map,
                });
                var marker = new google.maps.Marker({
                    position: {lat: 45.757108, lng: 21.226652},
                    map: map,
                });

            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5OyUVGhINTd1bJ2DN4dBTQGKSMGiuB3A&callback=initMap">
        </script>
    </section>

    <section id="section-contact">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h5 class="mt-0">Selecteaza o scoala:</h5>

                        {!! Form::open(['url' => 'istoric']) !!}
                        <div class="form-group">
                            {!! Form::select('selected_school', $school_names, null, [ 'class' =>  'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'form-control btn btn-primary', ]) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop