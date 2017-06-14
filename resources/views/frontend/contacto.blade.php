@extends('frontend.layouts.main')

@section('title')
    @parent Dónde nos ubicamos
@stop

@section('content')

    @include('frontend.partials.breadcrumbs',
    ['titulo' => 'Contáctanos',
    'p1'=>'home',
    'p1_url'=>'/',
    'p2'=>'Contacto',
    'img'=>'/frontend/assets/img/breadcrumbs-img.jpg',
    ])



   <div class="content-md ">


    <!--=== Content Part ===-->
    <div class="container">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <div class="headline"><h2>Formulario de Contacto</h2></div>
                <p>
                    A continuación le presentamos un formulario de contacto
                    con el cual podrá enviarnos sus datos y con mucho gusto
                    nos contactaremos con usted a la brevedad.
                </p>
                <br/>



                @if($errors->any())
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-danger">
                                <h1>Error <span class="glyphicon glyphicon-exclamation-sign"></span></h1>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="/messages" method="POST" id="sky-form3" class="sky-form contact-style">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <fieldset class="no-padding">
                        <label for="name">Nombre <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="sender_name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label  for="email">Email <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="email" name="sender_email"  id="email" class="form-control required">
                                </div>
                            </div>
                        </div>

                        <label for="phone">Teléfono <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input name="sender_phone" type="phone"  id="phone" class="form-control" maxlength="12">
                                </div>
                            </div>
                        </div>

                        <label for="message">Mensaje <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="3" name="message" id="message" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <p><button type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Enviar Mensaje</button></p>
                    </fieldset>
                </form>
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2>Contactos</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>Francisco Villa 4f, Zaragoza, 99320 Jerez de García Salinas, Zac.</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>ricolate.contacto@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+52 492 150 7180</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>http://www.ricolate.com</a></li>
                </ul>



                <!-- Business Hours -->
                <div class="headline"><h2>Horas de trabajo</h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong>Lunes-Viernes:</strong> 10:00am a 8:30pm</li>
                    <li><strong>Sábados-Domingos:</strong> 10:00am a 4:30pm</li>

                </ul>

            </div><!--/col-md-3-->
        </div><!--/row-->


        <!-- End Owl Clients v1 -->
    </div><!--/container-->
    <!--=== End Content Part ===-->
    </div>


@stop
@section('scripts')
    <script>
        var contactForm = window.contactForm || {};

        /**
         * Auto hyphenate the Phone Number field using a regex.
         */
        contactForm.autoHyphenate = function()
        {
            $("input[name='sender_phone']").keyup(function(){
                //Remove hyphens that the user enters.
                var phoneNum = $(this).val().split("-").join("");
                if($(this).val().length > 3){
                    phoneNum = phoneNum.match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");
                    $(this).val(phoneNum);
                }
            });
        };

        /**
         * Check that each required field has a value.
         *
         * @returns {boolean}
         */
        contactForm.checkRequiredFields = function()
        {
            var passedValidation = true;
            $('input.required').each(function()
            {
                var empty = (!!$(this).val() === 'undefined' || $(this).val() === '');
                if(empty)
                {
                    $('li.validation-error').remove();
                    $('.contact-errors').show().find('ul.messages').append('<li class="validation-error">Por favor llene todos los campos requeridos.</li>');
                    $(this).addClass('contact-form-error');
                    passedValidation = false;
                }else {
                    $('li.validation-error').remove();
                    $(this).removeClass('contact-form-error');
                }
            });
            return passedValidation;
        };

        /**
         * Handle form submission.
         */
        $('form#contact-form').submit(function(e)
        {
            var submitBtn = $(this).find('button[type="submit"]');
            if(contactForm.checkRequiredFields())
            {
                submitBtn.text('Enviando...');
                var url = $(this).attr('action');
                var data = $(this).serialize();
                $.post(url, data, function(d)
                {
                    $('form#contact-form').slideUp().after('<h1>¡Gracias por su interés!</h1>');
                });
            }
            e.preventDefault();
        });

        contactForm.autoHyphenate();
    </script>

@stop