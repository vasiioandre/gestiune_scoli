@extends('app')

@section('content')

    <section id="contact">
        @foreach($scoala as $school)
            <div class="container">
                <div class="section-header">
                    <h1>Contact </h1>
                    <p>{{ $school->nume }}</p>
                </div>

                <div class="row contact-info">
                    <div class="col-md-3">
                        <div class="contact-nr_cf">
                            <i class="fa fa-2x fa-book contact"></i>
                            <h3>Nr. CF</h3>
                            <p>{{ $school->nr_cf }}</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-address">
                            <i class="fa fa-2x fa-home contact"></i>
                            <h3>Adresa</h3>
                            <address>{{ $school->adresa }}</address>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="fa fa-2x fa-phone contact"></i>
                            <h3>Telefon</h3>
                            <p>{{ $school->telefon }}</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="contact-email">
                            <i class="fa fa-2x fa-envelope contact"></i>
                            <h3>Email</h3>
                            <p>{{ $school->email }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div>
                <section id="contact-map">
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
            </div>



        </section>






    {{--@foreach($scoala as $school)
        <div class="container" id="contact">
            <div class="container contact-title">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                            <h1>Contact</h1>
                    </div>
            </div>

            <div class="row">
                <div class="col-md-5">

                    @if (Auth::check())
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="contact-cf">
                                    <i class="fa fa-2x fa-book contact"></i>
                                    <h3>Nr. CF</h3>
                                    <p>{{ $school->nr_cf }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact-address">
                                <i class="fa fa-2x fa-home contact"></i>
                                <h3>Adresa</h3>
                                <p>{{ $school->adresa }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact-phone">
                                <i class="fa fa-2x fa-phone contact"></i>
                                <h3>Telefon</h3>
                                <p>{{ $school->telefon }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="contact-email">
                                <i class="fa fa-2x fa-envelope contact"></i>
                                <h3>Email</h3>
                                <p>{{ $school->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="col-md-7">
                        <section id="contact-map">
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
                    </div>

                </div>
        </div>
--}}
    @endforeach

@stop


@section('login_menu')
@endsection
