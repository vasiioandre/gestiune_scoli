@extends('app')

@section('content')

    <section id="section-contact" class="section appear clearfix">
        <div class="container">

            <div class="row mar-bot40">
                <div class="col-md-offset-3 col-md-6">
                    <div class="section-header">
                        <h1 class="section-heading animated" data-animation="bounceInUp">Adauga scoala</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="cform" id="contact-form">
                        <div id="sendmessage">
                            Your message has been sent. Thank you!
                        </div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label for="name">Nume</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <label for="name">Adresa</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <label for="name">Telefon</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <label for="message">Istoric</label>
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validation"></div>
                            </div>

                            <button type="submit" class="btn btn-theme pull-left">Adauga</button>
                        </form>

                    </div>
                </div>
                <!-- ./span12 -->
            </div>

        </div>
    </section>

@stop

@section('login_menu')
@endsection