@extends('frontend.layouts.main')

@section('title')
    @parent Resultados de busqueda
@stop

@section('content')
    @include('frontend.partials.breadcrumbs',
        ['titulo' => "Busqueda: $query ",
        'p1'=>'home',
        'p1_url'=>'/',
        'p2'=>'Busqueda',
        'img'=>'/frontend/assets/img/breadcrumbs-img.jpg'])

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                @if(!$results->isEmpty())
                    <h1></h1>
                @else
                    <h1>No se tienen resultados para: {{ $query }}</h1>
                @endif
            </div>
        </div>
        <div class="filter-results">


            <div class="row illustration-v2">
                @foreach($results as $result)
                    <div class="col-md-4">
                        <div class="product-img product-img-brd">
                            <a href="/producto/{{ $result->product_id }}"><img class="full-width img-responsive" src="{{ (count($result->images)) ? $result->images->first()->image_path : 'http://placehold.it/221x221' }}" alt=""></a>
                            <a class="product-review" href="/producto/{{ $result->product_id }}">Ver</a>
                            {!! Form::open(['method' => 'POST', 'url' => ['/cart/add/' .  $result->product_id]]) !!}
                            {!! Form::button('<i class="fa fa-shopping-cart"></i>Agregar al Carrito', ['class' => 'add-to-cart', 'type' => 'submit']) !!}
                            {!! Form::close() !!}

                        </div>
                        <div class="product-description product-description-brd margin-bottom-30">
                            <div class="overflow-h margin-bottom-5">
                                <div class="pull-left">
                                    <h4 class="title-price"><a href="shop-ui-inner.html">{{ $result->name }}</a></h4>
                                    <span class="gender text-uppercase">{{ $result->manufacturer->manufacturer }}</span>

                                </div>

                            </div>

                        </div>
                    </div>

                @endforeach



            </div>
        </div><!--/end filter resilts-->
    </div>
@stop