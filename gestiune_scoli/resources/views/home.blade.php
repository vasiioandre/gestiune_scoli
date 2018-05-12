@extends('app')

@section('user_menu')
@endsection

@section('content_visitor')
    <section class="featured">
    </section>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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