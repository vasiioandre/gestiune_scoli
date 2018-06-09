@extends('app')

@section('content')

    <section id="services">
        <div class="container">
            <div class="container page-title">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                        <div class="about-heading">
                            <h1>Investitii</h1>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($investitii as $investitie)
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
                                        <p>{{ $investitie->anul_finalizarii }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Detalii:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $investitie->detalii }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Firma contractata:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $investitie->firma }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Suma investita</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $investitie->suma_investita }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                @if($investitie->pdf_autorizatie)
                                    <a href="{{ asset('img/'.$investitie->pdf_autorizatie) }}">Vezi PDF autorizatie</a>
                                @endif

                                @if($investitie->pdf_proiect)
                                        <a href="{{ asset('img/'.$investitie->pdf_proiect) }}">Vezi PDF proiect</a>
                                @endif

                                @if($investitie->pdf_receptie)
                                        <a href="{{ asset('img/'.$investitie->pdf_receptie) }}">Vezi PDF receptie</a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-5">
                {{ $investitii->links() }}
            </div>
        </div>
    </section>

@stop


@section('login_menu')
@endsection

