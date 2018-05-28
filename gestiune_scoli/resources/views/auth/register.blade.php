@extends('app')

@section('content')
    <section class="featured">
    </section>

    <section id="section-contact" class="section-login appear clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <div class="section-header">
                            <h1>Register</h1>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nume') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tip_utilizator" class="col-md-4 col-form-label text-md-right">{{ __('Tip Utilizator') }}</label>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            {!! Form::select('tip_utilizator', array('primarie'=>'Primarie', 'scoala'=>'Scoala'), 'elev', array('class'=>"form-control")) !!}
                                        </div>

                                        {{--<input id="tip_utilizator" type="text" class="form-control{{ $errors->has('tip_utilizator') ? ' is-invalid' : '' }}" name="tip_utilizator" value="{{ old('tip_utilizator') }}" required autofocus>--}}

                                        {{--@if ($errors->has('tip_utilizator'))--}}
                                            {{--<span class="invalid-feedback">--}}
                                                {{--<strong>{{ $errors->first('tip_utilizator') }}</strong>--}}
                                            {{--</span>--}}
                                        {{--@endif--}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Parola') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma parola') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('login_menu')
@endsection
