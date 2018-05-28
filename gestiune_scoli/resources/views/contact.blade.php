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
                    @if (Auth::check())
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
                    @else
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="fa fa-2x fa-home contact"></i>
                                <h3>Adresa</h3>
                                <address>{{ $school->adresa }}</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="fa fa-2x fa-phone contact"></i>
                                <h3>Telefon</h3>
                                <p>{{ $school->telefon }}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="fa fa-2x fa-envelope contact"></i>
                                <h3>Email</h3>
                                <p>{{ $school->email }}</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            <div>
                <section id="contact-map">
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: {{ $school->latitudine }}, lng:  {{ $school->longitudine }} };
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 16,
                                center: uluru
                            });
                            map.setTilt(100);

                            var marker = new google.maps.Marker({
                                position: {lat: {{ $school->latitudine }}, lng: {{ $school->longitudine }} },
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
    @endforeach

@stop


@section('login_menu')
@endsection
