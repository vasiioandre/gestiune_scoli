@extends('app')

@section('content')

    <div class="container" id="contact">
        <div class="container page-title">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                        <h1>Contact</h1>
                </div>
        </div>

        <div class="row">
            <div class="col-md-5">

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 col-md-offset-2">
                        <div>
                            <i class="fa fa-2x fa-home"></i>
                            <h3>Address</h3>
                            <address>A108 Adam Street, NY 535022, USA</address>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-phone">
                            <i class="fa fa-2x fa-phone contact"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-email">
                            <i class="fa fa-2x fa-envelope contact"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>




                <div class="col-md-7">
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
                </div>

            </div>
    </div>


@stop


@section('login_menu')
@endsection
