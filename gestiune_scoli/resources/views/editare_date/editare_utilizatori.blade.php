@extends('app')

@section('content')
    <section id="editare_utilizatori" class="section appear clearfix">
        <div class="container">
            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Administrare utilizatori</h1>
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
                    <th>Nume</th>
                    <th>Email</th>
                    <th>Drepturi</th>
                    <th width="100px">Actiune</th>
                </tr>
                @if($utilizatori->count())
                    @foreach($utilizatori as $key => $utilizator)
                        {!! Form::open(['route' => ['stergere_utilizator', $utilizator->id], 'method' => 'delete']) !!}
                            <tr id="tr_{{$utilizator->id}}">
                                <td>{{ $utilizator->name }}</td>
                                <td>{{ $utilizator->email }}</td>
                                <td>{{ $utilizator->description }}</td>
                                <td>
                                    <div class='btn-group'>
                                        {!! Form::button('Sterge', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Sunteti sigur ca doriti sa stergeti utilizatorul?')"]) !!}
                                    </div>
                                </td>
                            </tr>
                        {!! Form::close() !!}
                    @endforeach
                @endif
            </table>
        </div>
    </section>
@stop

@section('login_menu')
@endsection