@extends('app')

@section('menu')
@endsection

@section('content')

    <div class="my-md-5 mx-md-3">
        <h1>Bine ai venit user!</h1>
    </div>

    <div class="media">
            {{--<img class="align-self-center mr-5 img-fluid" src="{{ URL::to('img/harta.jpg') }}">--}}

        <div id="map" class="align-self-center mr-5"></div>
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


        <div class="media-body">
            <h5 class="mt-0">Selecteaza o scoala:</h5>

            {!! Form::open(['url' => 'info_generale']) !!}
            <div class="form-group">
                {{--<select class="textWidth form-control" name="select_school" id="select_school" type="text">--}}
                {{--@foreach($school_names as $school_name)--}}
                {{--<option value="{{$school_name->id}}">--}}
                {{--{{$school_name->nume}}--}}
                {{--</option>--}}
                {{--@endforeach--}}
                {{--</select>--}}

                {!! Form::select('selected_school', $school_names, null, [ 'class' =>  'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Mergi la scoala selectata', ['class' => 'form-control btn btn-secondary btn-lg']) !!}
            </div>

            {!! Form::close() !!}


            <div class="my-md-5 mx-md-3">
                <button type="button" class="btn btn-primary btn-lg">Adauga scoala</button>
            </div>
        </div>
    </div>

@stop