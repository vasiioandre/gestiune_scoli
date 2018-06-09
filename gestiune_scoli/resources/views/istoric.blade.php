@extends('app')

@section('content')
    @foreach($scoala as $school)
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                    <div class="about-heading">
                        <h1>{{ $school->nume }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <div class="about-left">
                        <img src="{{ URL::to('img/' . $school->fotografie) }}">
                    </div>
                </div>

                <div class="col-xs-12 col-md-7">
                    <div class="about-right">
                            <div class="about-right-wrapper">
                                <p>{{ $school->istoric }}</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop

@section('login_menu')
@endsection
