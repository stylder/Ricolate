@extends('frontend.layouts.main')

@section('title')
    @parent Tu Carro
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


            <div role="application" class="wizard clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a
                                    href="/cart" aria-controls="steps-uid-0-p-0"><span
                                        class="current-info audible">paso actual: </span><span class="number">1.</span>
                                <div class="overflow-h">
                                    <h2>Carrito de compras</h2>
                                    <p>Revisar y edita sus productos</p>
                                    <i class="rounded-x fa fa-check"></i>
                                </div>
                            </a></li>
                        <li role="tab" class="first current" aria-disabled="true">
                            <a href="/checkout" aria-controls="steps-uid-0-p-1"><span class="number">2.</span>
                                <div class="overflow-h">
                                    <h2>Solicitud Presupuesto</h2>
                                    <p>Revisar datos de presupuesto</p>
                                    <i class="rounded-x fa fa-home"></i>
                                </div>
                            </a></li>
                    </ul>
                </div>
                <div class="content clearfix">
                    <div class="header-tags title current"  tabindex="-1">
                        <div class="overflow-h">
                            <h2>Carrito de compras</h2>
                            <p>Revisar y edita sus productos</p>
                            <i class="rounded-x fa fa-check"></i>
                        </div>
                    </div>


                    <div class="header-tags title" tabindex="-1">
                        <div class="overflow-h">
                            <h2>Solicitud Presupuesto</h2>
                            <p>Revisar datos de presupuesto</p>
                            <i class="rounded-x fa fa-home"></i>
                        </div>
                    </div>

                    @include('frontend.partials.datospresupuesto')


                </div>
                <div class="actions clearfix">
                    <ul role="menu" aria-label="Paginación">
                        <li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Anterior</a></li>
                        <li aria-hidden="false" aria-disabled="false"><a href="/checkout" role="menuitem">Siguiente</a></li>
                        <li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Solicitar</a></li>
                    </ul>
                </div>
            </div>


        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')

@stop