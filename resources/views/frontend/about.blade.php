@extends('public.layouts.main')

@section('title')
    @parent Acerca Ricolate
@stop

@section('content')
    <div class="container">
        <div class="row row-top-buffer">
            <div class="col-sm-8">
                <div class="jumbotron">
                    <h1>Acerca Ricolate</h1>
                    <p>Bla bla, Bla bla Bla bla, Bla bla Bla bla, Bla bla Bla bla, Bla bla</p>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1>Contacto</h1>
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
                            <div class="row contact-errors">
                                <div class="col-sm-12">
                                    <div class="alert alert-danger">
                                        <h1>Error <span class="glyphicon glyphicon-exclamation-sign"></span></h1>
                                        <ul class="messages">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @if(!$contacted)
                        <form id="contact-form" role="form" method="POST" action="/messages">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input name="sender_name" type="text" class="form-control required" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="sender_email" type="email" class="form-control required" id="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Teléfono:</label>
                                <input name="sender_phone" type="phone" class="form-control required" id="phone" maxlength="12">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea name="message" rows="5" class="form-control" id="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Contáctanos</button>
                        </form>
                        @else
                            <h1>
¡Gracias por su interés!</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
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
                    $('.contact-errors').show().find('ul.messages').append('<li class="validation-error">Please fill out all required fields.</li>');
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