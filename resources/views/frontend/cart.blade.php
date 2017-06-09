@extends('frontend.layouts.main')

@section('title')
    @parent Tu Carro
@stop

@section('content')

    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Check Out</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Medium Part ===-->
    <div class="content-md margin-bottom-30">
        <div class="container">
            <form class="shopping-cart" action="#">
                <div>


                    @include('frontend.partials.productos')

                    @include('frontend.partials.datospresupuesto')

                    {{--@include('frontend.partials.datospago');--}}

                </div>
            </form>
        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')
    <script>
        jQuery(document).ready(function() {
            StepWizard.initStepWizard();
        });
    </script>
@stop