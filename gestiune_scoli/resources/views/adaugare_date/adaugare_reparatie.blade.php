@extends('app')

@section('content')

    <section id="adaugare_cladire" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Adauga reparatii</h1>
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
                    <strong>Atentie!</strong> Nu s-au putut salva datele in baza de date.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="cform">
                <form method="POST" action="{{ route('adaugare_reparatie.post') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="year" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Anul finalizarii') }}</label>

                        <div class="col-md-5">
                            <input id="year" type="text" class="form-control" name="year" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="details" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Detalii') }}</label>

                        <div class="col-md-5">
                            <textarea id="details" class="form-control" name="details" rows="4" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="amount" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Suma Investita') }}</label>

                        <div class="col-md-5">
                            <input id="amount" type="text" class="form-control" name="amount" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="company" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Firma ce a realizat lucrarea') }}</label>

                        <div class="col-md-5">
                            <input id="company" type="text" class="form-control" name="company" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Fotografii') }}</label>

                        <div class="col-md-5">
                            {{--{!! Form::file('image', array('class' => 'form-control')) !!}--}}
                            <input type="file" name="photos[]" multiple class="form-control" />
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