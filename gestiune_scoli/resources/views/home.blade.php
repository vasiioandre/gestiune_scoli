@extends('app')

@section('content')

    <h1>Hello user!</h1>


    <div class="media">
            <img class="align-self-center mr-5 img-fluid" src="{{ URL::to('img/harta.jpg') }}">
            <div class="media-body">
                <h5 class="mt-0">Selecteaza o scoala:</h5>

                <div class="dropdown m-md-5">
                    <select>
                        @foreach($school_names as $school_name)
                            <option value="{{$school_name->id_scoala}}">{{$school_name->nume}}</option>
                        @endforeach
                    </select>
                </div>






                {{--<div class="form-group">--}}
                    {{--{!! Form::Label('item', 'Item:') !!}--}}
                    {{--<select class="form-control" name="item_id">--}}
                        {{--@foreach($items as $item)--}}
                            {{--<option value="{{$item->item_id}}">{{$item->id}}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}

                <button type="button" class="btn btn-secondary" onclick="window.location='{{ url('info_generale') }}'">Mergi la scoala selectata</button>

                <div class="my-md-5 mx-md-3">
                    <button type="button" class="btn btn-primary btn-lg">Adauga scoala</button>
                </div>
            </div>
    </div>

@stop