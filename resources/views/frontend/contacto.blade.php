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

                {!! Form::open(['method' => 'POST', 'url' => '/messages', 'class'=>'sky-form contact-style', 'id'=>'sky-form3']) !!}

                    <fieldset class="no-padding">
                        <label for="name">Nombre <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="sender_name" id="name" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <label  for="email">Email <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="email" name="sender_email"  id="email" class="form-control required" required>
                                </div>
                            </div>
                        </div>

                        <label for="phone">Teléfono <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input name="sender_phone" type="phone"  id="phone" class="form-control" maxlength="12" required>
                                </div>
                            </div>
                        </div>

                        <label for="message">Mensaje <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="3" name="message" id="message" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>

                        <p>
                            {!! Form::button('Enviar Mensaje', ['class' => 'btn-u btn-u-sea-shop btn-u-lg', 'type' => 'submit', 'id'=>'contactobtn']) !!}
                        </p>
                    </fieldset>
                {!! Form::close() !!}
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
        $(document).ready(function(){
            $('#sky-form3').on('submit',function(e){
                $('#contactobtn').text('Enviando..');
                e.preventDefault(e);
                $.ajax({
                    type:"POST",
                    url:'/messages',
                    data:$(this).serialize(),
                    dataType: 'json',
                    success: function(data){
                        new Noty({
                            type: 'success',
                            layout: 'bottomRight',
                            text: 'Se envió el mensaje correctamente',
                            progressBar: true,
                            timeout: 3000,
                            theme:'sunset',
                            closeWith: ['click', 'button'],
                            animation: {
                                open: 'noty_effects_open',
                                close: 'noty_effects_close'
                            }
                        }).show();

                        $('#sky-form3').trigger("reset");
                        $('#contactobtn').text('Enviar Mensaje');

                    },
                    error: function(data){
                        new Noty({
                            type: 'error',
                            layout: 'bottomRight',
                            text: 'Se produjó un error al enviar el mensaje',
                            progressBar: true,
                            timeout: 3000,
                            theme:'sunset',
                            closeWith: ['click', 'button'],
                            animation: {
                                open: 'noty_effects_open',
                                close: 'noty_effects_close'
                            }
                        }).show();
                    }
                })
            });
        });
    </script>

@stop