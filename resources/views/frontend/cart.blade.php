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





    <script type="text/javascript" src="{{asset('/frontend/assets/plugins/jquery-steps/build/jquery.steps.js?v=r0sLDicvP58AIXN_mc3QdyVvVj5euZNzdsa2N1PKvb81')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js?v=r0sLDicvP58AIXN_mc3QdyVvVj5euZNzdsa2N1PKvb81')}}"></script>
    {{--<script type="text/javascript" src="{{asset('/frontend/assets/js/plugins/stepWizard.js?v=1')}}"></script>--}}

    <script>

        $.getScript("/frontend/assets/js/plugins/stepWizard.js?v="+Math.random()*10, function( data, textStatus, jqxhr ) {
                console.log( data ); // 200
            console.log( "Load was performed." );
            setTimeout(InicializarFormulario,0);
            function InicializarFormulario() {
                StepWizard.initStepWizard();
            }

        });

    </script>

@stop