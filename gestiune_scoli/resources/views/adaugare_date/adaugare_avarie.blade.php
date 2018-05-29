@extends('app')

@section('content')

    <section id="adaugare_cladire" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Adauga avarie</h1>
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
                    <strong>Atentie!</strong> Nu s-au putut salva datele in baza de date. Incearca din nou.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="cform">
                <form method="POST" action="{{ route('adaugare_avarie.post') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="amount" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Suma (RON)') }}</label>

                        <div class="col-md-5">
                            <input id="amount" type="text" class="form-control" name="amount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Firma') }}</label>

                        <div class="col-md-5">
                            <input id="company" type="text" class="form-control" name="company">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="solicitation" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Solicitare') }}</label>

                        <div class="col-md-5">
                            {!! Form::file('solicitation', array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="reception" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Receptie') }}</label>

                        <div class="col-md-5">
                            {!! Form::file('reception', array('class' => 'form-control')) !!}
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