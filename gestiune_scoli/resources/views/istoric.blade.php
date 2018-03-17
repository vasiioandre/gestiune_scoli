@extends('app')

@section('content')

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="img/loga.jpg" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
                    <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>

@stop


@section('login_menu')
@endsection



{{--<!--@foreach($scoala as $school)-->--}}
{{--<!--<div class="container">-->--}}
{{--<!--    <div class="row">-->--}}
{{--<!--        <div class="col-6">-->--}}
{{--<!--            <img class="align-self-center mr-5 img-fluid img-thumbnail" src="{{ URL::to('img/' . $school->imagine) }}">-->--}}
{{--<!--        </div>-->--}}
{{--<!---->--}}
{{--<!--        <div class="col-6" align="center">-->--}}
{{--<!--            <h2 class="row my-md-5 mx-md-3"> {{ $school->nume }}</h2>-->--}}
{{--<!--            <p>{{ $school->istoric }}</p>-->--}}
{{--<!--        </div>-->--}}
{{--<!--    </div>-->--}}
{{--<!--</div>-->--}}
{{--<!---->--}}
{{--<!--<div class="container">-->--}}
{{--<!--    <div class="row my-md-5 mx-md-3">-->--}}
{{--<!--        <div class="col-6">-->--}}
{{--<!--            <h5 class="contact">Adresa:</h5>-->--}}
{{--<!--            <p class="contact"> {{ $school->adresa }}</p>-->--}}
{{--<!--        </div>-->--}}
{{--<!---->--}}
{{--<!--        <div class="col-6">-->--}}
{{--<!--            <h5 class="contact">Contact:</h5>-->--}}
{{--<!--            <nav class="gtco-nav" role="navigation" align="left">-->--}}
{{--<!--                <div class="gtco-container">-->--}}
{{--<!--                    <div class="row">-->--}}
{{--<!--                        <div class="col-md-12">-->--}}
{{--<!--                            <ul class="navbar-nav">-->--}}
{{--<!--                                <li class="contact"><a class="contact" href="#"><i class="fa fa-1x fa-phone contact"></i> {{ $school->telefon }} </a></li>-->--}}
{{--<!--                                <li class="contact"><a href="#"><i class="fa fa-1x fa-envelope-square contact"> {{ $school->email }}</i></a></li>-->--}}
{{--<!--                            </ul>-->--}}
{{--<!--                        </div>-->--}}
{{--<!--                    </div>-->--}}
{{--<!--                </div>-->--}}
{{--<!--            </nav>-->--}}
{{--<!--        </div>-->--}}
{{--<!--    </div>-->--}}
{{--<!--</div>-->--}}
{{--<!--@endforeach-->--}}