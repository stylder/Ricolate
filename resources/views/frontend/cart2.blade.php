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
            <form method="POST" action="http://localhost:8000/cotizacion" accept-charset="UTF-8" class="shopping-cart" novalidate="novalidate"><input name="_token" type="hidden" value="B83JhkIhIV3n44dg0Cn3UYki7BY07kKP0EuuQaER">
                <input type="hidden" name="_token" value="B83JhkIhIV3n44dg0Cn3UYki7BY07kKP0EuuQaER">
                <div role="application" class="wizard clearfix" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">paso actual: </span><span class="number">1.</span>
                                    <div class="overflow-h">
                                        <h2>Carrito de compras</h2>
                                        <p>Revisar y edita sus productos</p>
                                        <i class="rounded-x fa fa-check"></i>
                                    </div>
                                </a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span>
                                    <div class="overflow-h">
                                        <h2>Solicitud Presupuesto</h2>
                                        <p>Revisar datos de presupuesto</p>
                                        <i class="rounded-x fa fa-home"></i>
                                    </div>
                                </a></li></ul></div><div class="content clearfix">
                        <div class="header-tags title current" id="steps-uid-0-h-0" tabindex="-1">
                            <div class="overflow-h">
                                <h2>Carrito de compras</h2>
                                <p>Revisar y edita sus productos</p>
                                <i class="rounded-x fa fa-check"></i>
                            </div>
                        </div>

                        <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Marca</th>
                                        <th>Cantidad</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="product-in-table">
                                            <a href="/products/1">
                                                <img class="img-responsive" src="/images/products/1-553bf9d2468c1.jpg">
                                            </a>
                                            <div class="product-it-in">
                                                <a href="/producto/1">
                                                    <h3>27" HD Television</h3>
                                                    <div class="hidden-sm hidden-xs">
                                                        <span>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos</span>
                                                    </div>

                                                </a>
                                            </div>
                                        </td>
                                        <td> Acme </td>
                                        <td>
                                            <input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="B83JhkIhIV3n44dg0Cn3UYki7BY07kKP0EuuQaER">
                                            <input name="newQuantity" type="number" min="0" class="quantity-field" value="4">
                                            <button class="quantity-button" type="submit"><i class="fa fa-refresh"></i></button>

                                        </td>


                                        <td>
                                            <a type="button" href="/cart/delete/1" class="close">
                                                <span>×</span><span class="sr-only">Cerrar</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-in-table">
                                            <a href="/products/2">
                                                <img class="img-responsive" src="/images/products/2-553bf9d2468c1.jpg">
                                            </a>
                                            <div class="product-it-in">
                                                <a href="/producto/2">
                                                    <h3>32" HD Television</h3>
                                                    <div class="hidden-sm hidden-xs">
                                                        <span>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos</span>
                                                    </div>

                                                </a>
                                            </div>
                                        </td>
                                        <td> Virtucon </td>
                                        <td>
                                            <form method="POST" action="http://localhost:8000/cart/2" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="B83JhkIhIV3n44dg0Cn3UYki7BY07kKP0EuuQaER">
                                                <input name="newQuantity" type="number" min="0" class="quantity-field" value="1">
                                                <button class="quantity-button" type="submit"><i class="fa fa-refresh"></i></button>
                                            </form>
                                        </td>


                                        <td>
                                            <a type="button" href="/cart/delete/2" class="close">
                                                <span>×</span><span class="sr-only">Cerrar</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-in-table">
                                            <a href="/products/13">
                                                <img class="img-responsive" src="/images/products/13-553c33e6d19f1.jpg">
                                            </a>
                                            <div class="product-it-in">
                                                <a href="/producto/13">
                                                    <h3>Vi</h3>
                                                    <div class="hidden-sm hidden-xs">
                                                        <span>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos</span>
                                                    </div>

                                                </a>
                                            </div>
                                        </td>
                                        <td> Techniholdings </td>
                                        <td>
                                            <form method="POST" action="http://localhost:8000/cart/13" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="B83JhkIhIV3n44dg0Cn3UYki7BY07kKP0EuuQaER">
                                                <input name="newQuantity" type="number" min="0" class="quantity-field" value="2">
                                                <button class="quantity-button" type="submit"><i class="fa fa-refresh"></i></button>
                                            </form>
                                        </td>


                                        <td>
                                            <a type="button" href="/cart/delete/13" class="close">
                                                <span>×</span><span class="sr-only">Cerrar</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-in-table">
                                            <a href="/products/3">
                                                <img class="img-responsive" src="/images/products/3-553bf9d2468c1.jpg">
                                            </a>
                                            <div class="product-it-in">
                                                <a href="/producto/3">
                                                    <h3>52" HD Television</h3>
                                                    <div class="hidden-sm hidden-xs">
                                                        <span>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat corrupti quos</span>
                                                    </div>

                                                </a>
                                            </div>
                                        </td>
                                        <td> Initech </td>
                                        <td>
                                            <form method="POST" action="http://localhost:8000/cart/3" accept-charset="UTF-8"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="B83JhkIhIV3n44dg0Cn3UYki7BY07kKP0EuuQaER">
                                                <input name="newQuantity" type="number" min="0" class="quantity-field" value="1">
                                                <button class="quantity-button" type="submit"><i class="fa fa-refresh"></i></button>
                                            </form>
                                        </td>


                                        <td>
                                            <a type="button" href="/cart/delete/3" class="close">
                                                <span>×</span><span class="sr-only">Cerrar</span>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>                    <div class="header-tags title" id="steps-uid-0-h-1" tabindex="-1">
                            <div class="overflow-h">
                                <h2>Solicitud Presupuesto</h2>
                                <p>Revisar datos de presupuesto</p>
                                <i class="rounded-x fa fa-home"></i>
                            </div>
                        </div>
                        <section class="billing-info body" id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" aria-hidden="true" style="display: none;">
                            <div class="row">
                                <div class="col-md-6 md-margin-bottom-40">
                                    <h2 class="title-type">Datos Solicitante</h2>
                                    <div class="billing-info-inputs checkbox-list">


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Nombre" name="nombre" id="nombre" class="form-control required" aria-required="true">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" class="form-control required" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Correo" name="correo" id="correo" class="form-control required email" aria-required="true">
                                            </div>
                                            <div class="col-sm-6">
                                                <input placeholder="Teléfono" name="telefono" id="telefono" class="form-control required" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Calle" name="calle" id="calle" class="form-control required" aria-required="true">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Número" name="numero" id="numero" class="form-control required" aria-required="true">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="text" placeholder="Colonia" name="colonia" id="colonia" class="form-control required" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="text" placeholder="Municipio" name="municipio" id="municipio" class="form-control required" aria-required="true">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Estado" name="estado" id="estado" class="form-control required" aria-required="true">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Código Postal" name="postal" id="postal" class="form-control required" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">

                                        <h2 class="title-type">Datos empresa</h2>
                                        <div class="billing-info-inputs checkbox-list">
                                            <input type="text" placeholder="Nombre de la Compañía" name="compania" id="compania" class="form-control">
                                            <input type="text" placeholder="RFC" name="rfc" id="rfc" class="form-control">
                                        </div>


                                        <h2 class="title-type">Notas</h2>
                                        <div class="billing-info-inputs checkbox-list">
                                            <textarea name="notas" rows="3" cols="20" class="form-control" placeholder="Si necesita, escriba aquí sus observaciones"></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>                </div><div class="actions clearfix"><ul role="menu" aria-label="Paginación"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Anterior</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Siguiente</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Solicitar</a></li></ul></div></div>

            </form></div>
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')

    <script type="text/javascript" src="{{asset('/frontend/assets/plugins/jquery-steps/build/jquery.steps.js')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/js/plugins/stepWizard.js')}}"></script>

    <script>
        // A $( document ).ready() block.
        $( document ).ready(function() {
            console.log( "ready 1!" );
            StepWizard.initStepWizard();
            console.log(StepWizard)

        });

    </script>
@stop