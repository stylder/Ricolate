@extends('frontend.layouts.main')

@section('title')
    @parent Datos de Cotización
@stop

@section('content')

    @include('frontend.partials.breadcrumbs',
    ['titulo' => 'Carrito de Compras',
    'p1'=>'home',
    'p1_url'=>'/',
    'p2'=>'Carrito',
    'img'=>'/frontend/assets/img/breadcrumbs-img.jpg'])

    <!--=== Content Medium Part ===-->

    <div class="content-md margin-bottom-30">
        <div class="container">
            {!! Form::open(['method' => 'POST', 'url' => '/cotizacion', 'class'=>'shopping-cart', 'id'=>'formulario_cotizacion']) !!}

                <div role="application" class="wizard clearfix" >
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first done" aria-disabled="false" aria-selected="false">
                                <a href="/cart" aria-controls="steps-uid-0-p-0">
                                    <span class="number">1.</span>
                                    <div class="overflow-h">
                                        <h2>Carrito de compras</h2>
                                        <p>Revisar y edita sus productos</p>
                                        <i class="rounded-x fa fa-check"></i>
                                    </div>
                                </a>
                            </li>
                            <li role="tab" class="current" aria-disabled="false" aria-selected="true">
                                <a href="/checkout" aria-controls="steps-uid-0-p-1">
                                    <span class="current-info audible">current step: </span>
                                    <span class="number">2.</span>
                                    <div class="overflow-h">
                                        <h2>Solicitud Presupuesto</h2>
                                        <p>Revisar datos de presupuesto</p>
                                        <i class="rounded-x fa fa-home"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content clearfix">

                        @include('frontend.partials.datospresupuesto')

                    </div>
                    <div class="actions clearfix">
                        <ul role="menu" aria-label="Pagination">
                            <li class="" aria-disabled="false">
                                <button class="btn-u btn-u-sea-shop btn-u-lg"
                                        onclick="window.location.href='/cart'">
                                    Anterior
                                </button>
                            </li>
                            <li aria-hidden="false" aria-disabled="false">
                                {!! Form::button('Cotizar', ['class' => 'btn-u btn-u-sea-shop btn-u-lg', 'type' => 'submit']) !!}
                            </li>

                        </ul>
                    </div>
                </div>
            {!! Form::close() !!}
        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')

    <script>
        $(document).ready(function(){
            $('#formulario_cotizacion').on('submit',function(e){
                e.preventDefault(e);
                $.ajax({
                    type:"POST",
                    url:'/cotizacion',
                    data:$(this).serialize(),
                    dataType: 'json',
                    success: function(data){
                        new Noty({
                            type: 'success',
                            layout: 'bottomRight',
                            text: 'Se envió la cotización correctamente',
                            progressBar: true,
                            timeout: 3000,
                            theme:'sunset',
                            closeWith: ['click', 'button'],
                            animation: {
                                open: 'noty_effects_open',
                                close: 'noty_effects_close'
                            }
                        }).show();

                        $('#formulario_cotizacion').trigger("reset");


                    },
                    error: function(data){
                        new Noty({
                            type: 'error',
                            layout: 'bottomRight',
                            text: 'Se produjó un error al enviar la cotización',
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