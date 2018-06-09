@extends('app')

@section('content')

    <section id="services">
        <div class="container">
            <div class="container page-title">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                        <div class="about-heading">
                            <h1>Utilitati</h1>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($utilitati as $utilitate)
                <div class="row">
                    <div class="box">
                        <div class="row">
                            <div class="col-lg-1 icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div  class="col-lg-9">

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Data:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $utilitate->data }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Consum apa:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $utilitate->consum_apa }}</p>
                                    </div>
                                </div>

                                <div class="row" >
                                    <div class="col-lg-4 reparatii">
                                        <p>Consum caldura:</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p>{{ $utilitate->consum_caldura }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-5">
                {{ $utilitati->links() }}
            </div>
        </div>
    </section>

@stop


@section('login_menu')
@endsection

