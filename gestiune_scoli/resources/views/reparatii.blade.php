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
    </section>

@stop


@section('login_menu')
@endsection

