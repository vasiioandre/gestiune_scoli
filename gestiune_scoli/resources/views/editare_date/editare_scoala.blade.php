@extends('app')

@section('content')

    @foreach($scoala as $school)

        <div class="modal" tabindex="-1" role="dialog" id="DeleteSchool">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Sunteti sigur ca doriti sa stergeti scoala {{ $school->nume }} ? Stergerea va sterge toate cladiri arondate, reparatiile, invetitiile, avariile si utilitatile asociate. </p>
                    </div>
                    <div class="modal-footer">
                            {!! Form::open(['url' => 'stergere_scoala']) !!}
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Anulare</button>
                                {!! Form::submit('Da, sterge scoala.', ['class' => 'btn btn-danger', ]) !!}
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <section id="adaugare_cladire" class="section appear clearfix">
            <div class="container">

                <div class="row mar-bot40">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="section-header">
                            <h1 class="section-heading animated" data-animation="bounceInUp">Editeaza scoala</h1>
                            <p> {{ $school->nume }}</p>
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
                    <form method="POST" action="{{ route('editare_scoala.post') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Nume') }}</label>

                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $school->nume }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nr_cf" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Nr. CF') }}</label>

                            <div class="col-md-5">
                                <input id="nr_cf" type="text" class="form-control" name="nr_cf" value="{{ $school->nr_cf }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Adresa') }}</label>

                            <div class="col-md-5">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $school->adresa }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Telefon') }}</label>

                            <div class="col-md-5">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $school->telefon }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $school->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="history" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Istoric') }}</label>

                            <div class="col-md-5">
                                <textarea id="history" class="form-control" name="history" rows="7" required>{{ $school->istoric }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Selecteaza o noua fotografie') }}</label>

                            <div class="col-md-5">
                                {!! Form::file('image', array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="form-group row top-buffer">
                            <div class="col-md-2 col-md-offset-4">
                                {!! Form::submit('Salveaza', ['class' => 'form-control btn btn-primary', 'name' => 'submitbutton', 'value' => 'save']) !!}
                            </div>

                            <div class="col-md-2 col-md-offset-1">
                                <button
                                        type="button"
                                        class="btn btn-primary form-control"
                                        data-toggle="modal"
                                        data-target="#DeleteSchool">
                                    Sterge scoala
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </section>
    @endforeach

@stop

@section('login_menu')
@endsection