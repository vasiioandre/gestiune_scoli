@extends('app')

@section('content')

    <section id="services">
        <div class="container">
            <div class="container page-title">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                        <div class="about-heading">
                            <h1>Avarii</h1>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($avarii as $avarie)
                <div class="row">
                    <div class="box">
                        <div class="row">
                            <div class="col-lg-1 icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div  class="col-lg-9">

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Data incidentului:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $avarie->data_incident }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Firma contractata:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $avarie->firma }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Suma investita</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $avarie->suma }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                @if($avarie->pdf_solicitare)
                                    <a href="{{ asset('img/'.$avarie->pdf_solicitare) }}">Vezi PDF solicitare</a>
                                @endif

                                @if($avarie->pdf_receptie)
                                    <a href="{{ asset('img/'.$avarie->pdf_receptie) }}">Vezi PDF receptie</a>
                                @endif
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

