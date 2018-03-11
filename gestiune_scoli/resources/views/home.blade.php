@extends('app')

@section('content')

    <h1>Hello user!</h1>


    <div class="media">
            <img class="align-self-center mr-5 img-fluid" src="{{ URL::to('img/harta.jpg') }}">
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
                    {!! Form::submit('Add Article', ['class' => 'form-control']) !!}
                </div>

                {!! Form::close() !!}


                <div class="my-md-5 mx-md-3">
                    <button type="button" class="btn btn-primary btn-lg">Adauga scoala</button>
                </div>
            </div>
    </div>

@stop