@extends('app')

@section('content')

    <section id="adaugare_cladire" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Adauga utilizatori</h1>
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
                <form method="POST" action="{{ route('adaugare_utilizatori.post') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="tip_utilizator" class="col-sm-2 col-form-label col-md-offset-3 text-md-right">{{ __('Tip Utilizator') }}</label>

                        <div class="col-md-4">
                                {!! Form::select('tip_utilizator', array('primarie'=>'Primarie', 'scoala'=>'Scoala', 'admin'=>'Admin'), 'elev', array('class'=>"form-control")) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label col-md-offset-3 text-md-right">{{ __('Nume') }}</label>

                        <div class="col-md-4">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label col-md-offset-3 text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-4">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label col-md-offset-3 text-md-right">{{ __('Parola') }}</label>

                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-sm-2 col-form-label col-md-offset-3 text-md-right">{{ __('Confirma parola') }}</label>

                        <div class="col-md-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="selected_school" class="col-sm-2 col-form-label col-md-offset-3 text-md-right">{{ __('Selecteaza scoala') }}</label>

                        <div class="col-md-4">
                            {!! Form::select('selected_school', $school_names, null, [ 'class' =>  'form-control']) !!}
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