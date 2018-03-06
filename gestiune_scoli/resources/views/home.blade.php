@extends('app')

@section('content')

    <h1>Hello user!</h1>


    <div class="media">
            <img class="align-self-center mr-5 img-fluid" src="{{ URL::to('img/harta.jpg') }}">
            <div class="media-body">
                <h5 class="mt-0">Selecteaza o scoala:</h5>

                <div class="dropdown m-md-5">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownSchoolButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ...
                    </button>
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.location='{{ url("/") }}'">Mergi la scoala selectata</button>

                <div class="my-md-5 mx-md-3">
                    <button type="button" class="btn btn-primary btn-lg">Adauga scoala</button>
                </div>
            </div>

    </div>



@stop