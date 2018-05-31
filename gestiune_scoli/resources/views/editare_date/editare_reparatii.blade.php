@extends('app')

@section('content')

    <div class="modal" tabindex="-1" role="dialog" id="ModificaReparatie">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('editare_reparatie') }}">
                @csrf
                <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group row">
                                    <input id="id_reparatie" type="hidden" class="form-control" name="id_reparatie">
                            </div>

                            <div class="form-group row">
                                <label for="an" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Anul finalizarii') }}</label>

                                <div class="col-md-5">
                                    <input id="an" type="text" class="form-control" name="an" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="detalii" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Detalii') }}</label>

                                <div class="col-md-5">
                                    <textarea id="detalii" class="form-control" name="detalii" rows="4" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="suma" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Suma Investita') }}</label>

                                <div class="col-md-5">
                                    <input id="suma" type="text" class="form-control" name="suma" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="firma" class="col-sm-2 col-form-label col-md-offset-2 text-md-right">{{ __('Firma ce a realizat lucrarea') }}</label>

                                <div class="col-md-5">
                                    <input id="firma" type="text" class="form-control" name="firma" required>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Anulare</button>
                            <input type="submit" class="btn btn-primary" value="Salveaza">
                            {{--{!! Form::submit('Salveaza', ['class' => 'btn btn-primary', ]) !!}--}}
                        </div>
                </div>
            </form>
        </div>
    </div>

    <section id="editare_utilizatori" class="section appear clearfix">
        <div class="container">
            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Editare reparatii</h1>
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
                    <strong>Atentie!</strong> Stergerea nu s-a putut realiza.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Anul finalizarii</th>
                    <th>Detalii</th>
                    <th>Suma investita</th>
                    <th>Firma</th>
                    <th width="150px">Actiune</th>
                </tr>

                @foreach($reparatii as $reparatie)
                    {!! Form::open(['route' => ['stergere_reparatie', $reparatie->id_reparatie], 'method' => 'delete']) !!}
                    <tr id="tr_{{$reparatie->id_reparatie}}">
                        <td>{{ $reparatie->anul_finalizarii }}</td>
                        <td>{{ $reparatie->detalii }}</td>
                        <td>{{ $reparatie->suma_investita }}</td>
                        <td>{{ $reparatie->firma }}</td>
                        <td>
                            <div class='btn-group'>
                                {{--                                    <a href="{!! route('home', [$utilizator->id]) !!}" class='btn btn-default btn-xs'>Modifica</a>--}}
                                {!! Form::button('Sterge', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Sunteti sigur ca doriti sa stergeti reparatia?')"]) !!}
                            </div>

                            <div class="btn-group">
                                <button
                                        type="button"
                                        class="btn btn-primary btn-xs"
                                        data-toggle="modal"
                                        data-id_reparatie="{{ $reparatie->id_reparatie }}"
                                        data-an="{{ $reparatie->anul_finalizarii }}"
                                        data-detalii="{{ $reparatie->detalii }}"
                                        data-suma="{{ $reparatie->suma_investita }}"
                                        data-firma="{{ $reparatie->firma }}"
                                        data-target="#ModificaReparatie">

                                    Modifica
                                </button>
                            </div>
                        </td>
                    </tr>
                    {!! Form::close() !!}
                @endforeach

            </table>
        </div>
    </section>

@stop

@section('login_menu')
@endsection