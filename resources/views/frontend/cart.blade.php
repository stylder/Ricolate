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
            {!! Form::open(['method' => 'POST', 'url' => '/cotizacion', 'class'=>'shopping-cart']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    @include('frontend.partials.productos')
                    @include('frontend.partials.datospresupuesto')
                </div>
            {!! Form::close() !!}
        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')

    <script type="text/javascript" src="{{asset('/frontend/assets/plugins/jquery-steps/build/jquery.steps.js')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/js/plugins/stepWizard.js')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/js/forms/page_login.js')}}"></script>

    <script>
        // A $( document ).ready() block.
        $( document ).ready(function() {
            console.log( "ready 1!" );
            StepWizard.initStepWizard();
            console.log(StepWizard)

        });

    </script>
@stop