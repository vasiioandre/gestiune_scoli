@extends('app')

@section('content')

    @foreach($scoala as $school)
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="align-self-center mr-5 img-fluid img-thumbnail" src="{{ URL::to('img/' . $school->imagine) }}">
            </div>

            <div class="col-6" align="center">
                <h2 class="row my-md-5 mx-md-3"> {{ $school->nume }}</h2>
                <p>{{ $school->istoric }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-md-5 mx-md-3">
            <div class="col-6">
                <h5 class="contact">Adresa:</h5>
                <p class="contact"> {{ $school->adresa }}</p>
            </div>

            <div class="col-6">
                <h5 class="contact">Contact:</h5>
                <nav class="gtco-nav" role="navigation" align="left">
                    <div class="gtco-container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="navbar-nav">
                                    <li class="contact"><a class="contact" href="#"><i class="fa fa-1x fa-phone contact"></i> {{ $school->telefon }} </a></li>
                                    <li class="contact"><a href="#"><i class="fa fa-1x fa-envelope-square contact"> {{ $school->email }}</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    @endforeach

@stop