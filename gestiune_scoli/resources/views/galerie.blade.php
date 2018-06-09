@extends('app')

@section('content')
    <section id="services">
        <div class="container galery-title">
            <button type="button" class="btn btn-arrow-left">
                <a href="{{ url('reparatii') }}">Inapoi la Reparatii</a>
            </button>

                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 ">
                        <div class="about-heading">
                            <h1>Galerie</h1>
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="portfolio-items isotopeWrapper clearfix" id="3">
                            @foreach ($photos as $photo)
                                <article class="col-md-4 isotopeItem">
                                    <div class="portfolio-item">
                                        <img src="{{ URL::to('img/' . $photo) }}" alt="">
                                        <div class="portfolio-desc align-center">
                                            <div class="folio-info">
                                                <h5><a href="#">Vezi imaginea</a></h5>
                                                <a href="{{ URL::to('img/' . $photo) }}" class="fancybox">
                                                    <i class="fa fa-plus fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('login_menu')
@endsection

