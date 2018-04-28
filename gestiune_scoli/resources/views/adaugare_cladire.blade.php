@extends('app')

@section('content')

    <section id="adaugare_cladire" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Adauga cladire arondata</h1>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="cform">
                <form method="POST" action="{{ route('adaugare_cladire.post') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Nume') }}</label>

                        <div class="col-md-4">
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Adresa') }}</label>

                        <div class="col-md-4">
                            <input id="address" type="text" class="form-control" name="address" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nr_cf" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Nr. CF') }}</label>

                        <div class="col-md-4">
                            <input id="nr_cf" type="text" class="form-control" name="nr_cf" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_scoala" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Scoala apartinatoare') }}</label>

                        <div class="col-md-4">
                            {!! Form::select('selected_school', $school_names, null, [ 'class' =>  'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Fotografie') }}</label>

                        <div class="col-md-4">
                            {!! Form::file('image', array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2 col-md-offset-5">
                            {!! Form::submit('Adauga', ['class' => 'form-control btn btn-primary', ]) !!}
                        </div>
                    </div>


                </form>

            </div>

        </div>
    </section>

@stop

@section('login_menu')
@endsection