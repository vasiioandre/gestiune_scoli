@extends('app')

@section('content')

    <section id="adaugare_cladire" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Adauga utilitati</h1>
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
                    <strong>Atentie!</strong> Nu s-au putut adauga datele. Incercati din nou.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="cform">
                <form method="POST" action="{{ route('adaugare_utilitati.post') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="water" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Consum apa') }}</label>

                        <div class="col-md-4">
                            <input id="water" type="text" class="form-control" name="water" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="heat" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Consum caldura') }}</label>

                        <div class="col-md-4">
                            <input id="heat" type="text" class="form-control" name="heat">
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