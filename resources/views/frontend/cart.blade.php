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
            <form class="shopping-cart" action="#" novalidate="novalidate">
                <div role="application" class="wizard clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria-disabled="false" aria-selected="true">
                                <a href="/cart" aria-controls="steps-uid-0-p-0">
                                    <span class="current-info audible">current step: </span><span
                                            class="number">1.</span>
                                    <div class="overflow-h">
                                        <h2>Carrito de compras</h2>
                                        <p>Revisar y edita sus productos</p>
                                        <i class="rounded-x fa fa-check"></i>
                                    </div>
                                </a></li>
                            <li role="tab" class="disabled" aria-disabled="true">
                                <a href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1">
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

                        @include('frontend.partials.productos')

                    </div>
                    <div class="actions clearfix">
                        <ul role="menu" aria-label="Pagination">
                            <li aria-hidden="false" aria-disabled="false">
                                <a href="/checkout" role="menuitem">Siguiente</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </form>
        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')


@stop