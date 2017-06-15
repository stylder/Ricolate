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
            <form class="shopping-cart" role="shopping-cart"action="cotizacion" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    @include('frontend.partials.productos')
                    @include('frontend.partials.datospresupuesto')
                </div>
            </form>
        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')
    <script src="{{asset('/frontend/assets/plugins/jquery-steps/build/jquery.steps.js')}}"></script>
    <script src="{{asset('/frontend/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>

    <script src="{{asset('/frontend/assets/js/plugins/stepWizard.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            StepWizard.initStepWizard();
        });
    </script>
@stop