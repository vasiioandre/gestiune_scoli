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


            <div class="container">

                <div class="modal fade and carousel slide" id="lightbox">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <ol class="carousel-indicators">
                                    <li data-target="#lightbox" data-slide-to="0" class="active"></li>
                                    <li data-target="#lightbox" data-slide-to="1"></li>
                                    <li data-target="#lightbox" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/loga.jpg" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <img src="img/moisil.jpg" alt="Second slide">
                                    </div>
                                    <div class="item">
                                        <img src="img/shakespeare.jpg" alt="Third slide">
                                        <div class="carousel-caption"><p>even with captions...</p></div>
                                    </div>
                                </div><!-- /.carousel-inner -->
                                <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div><!-- /.modal-body -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div><!-- /.container -->




            <div class="row">


                    @foreach($reparatii as $reparatie)
                    <div class="box">


                        <div class="row">
                            <div class="col-lg-1 icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>

                            <div  class="col-lg-10">

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

                            <div class="col-lg-1">
                                <a href="#lightbox" data-toggle="modal">Vezi fotografii</a>
                            </div>

                        </div>
                    </div>

                    @endforeach

                </div>
            </div>

    </section>

@stop


@section('login_menu')
@endsection

