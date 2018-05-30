@extends('app')

@section('content')

    <section id="services">
        <div class="container">
            <div class="container page-title">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                        <div class="about-heading">
                            <h1>Reparatii</h1>
                        </div>
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

            <div class="row cautare">
                <form method="POST" action="{{ url('cautare_reparatie') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2" align="right">
                            <p>Introduceti anul finalizarii reparatiei:</p>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="search" class="form-control" value="{{ old('search') }}">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary">Cauta</button>
                        </div>
                    </div>
                </form>
            </div>

            @foreach($reparatii as $reparatie)
                <div class="row">
                        <div class="box">
                            <div class="row">
                                <div class="col-lg-1 icon">
                                    <i class="fa fa-check-square-o"></i>
                                </div>

                                <div  class="col-lg-9">

                                    <div class="row" >
                                        <div class="col-lg-4 reparatii">
                                            <p>Anul finalizarii:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>{{ $reparatie->anul_finalizarii }}</p>
                                        </div>
                                    </div>

                                    <div class="row" >
                                        <div class="col-lg-4 reparatii">
                                            <p>Detalii:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>{{ $reparatie->detalii }}</p>
                                        </div>
                                    </div>

                                    <div class="row" >
                                        <div class="col-lg-4 reparatii">
                                            <p>Firma contractata:</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>{{ $reparatie->firma }}</p>
                                        </div>
                                    </div>

                                    <div class="row" >
                                        <div class="col-lg-4 reparatii">
                                            <p>Suma investita</p>
                                        </div>
                                        <div class="col-lg-8">
                                            <p>{{ $reparatie->suma_investita }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <form action="{{ route('galerie.post') }}" method="post">
                                        {{ csrf_field() }}

                                        @foreach($reparatie->fotografii as $fotografie)
                                            <input type="hidden" name="photo{{ $fotografie->id_fotografie }}" value="{{ $fotografie->nume_fotografie }}">
                                        @endforeach

                                        <input type="submit" value="Vezi fotografii">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

            @endforeach

            </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-5">
                {{ $reparatii->links() }}
            </div>
        </div>

    </section>

@stop


@section('login_menu')
@endsection

