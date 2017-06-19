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
                            {!! Form::open(['method' => 'POST', 'url' => ['/cart/add/' .  $result->product_id],'class'=>'producto-form']) !!}
                            {!! Form::hidden('id',$result->product_id) !!}
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


@section('scripts')
    <script>
        $(document).ready(function () {
            $(document).on("submit",".producto-form",function(e){
                e.preventDefault(e);

                var id = $(this).find('input[type="hidden"][name="id"]').val();
                var _token = $(this).find('input[type="hidden"][name="_token"]').val();

                var data = {'id':id,'_token':_token};

                console.log(data);
                $.ajax({

                    type:"POST",
                    url:'/cart/add/'+id,
                    data:data,
                    dataType: 'json',
                    success: function(data){
                        new Noty({
                            type: 'success',
                            layout: 'bottomRight',
                            text: 'Se agregó el producto correctamente al carrito',
                            progressBar: true,
                            timeout: 3000,
                            theme:'sunset',
                            closeWith: ['click', 'button'],
                            animation: {
                                open: 'noty_effects_open',
                                close: 'noty_effects_close'
                            }
                        }).show();

                        var cart =$('#cartTotal'),
                            cartValue = cart.text();

                        $('#cartTotal').text(parseInt(cartValue)+1).trigger('change');
                    },
                    error: function(data){
                        new Noty({
                            type: 'error',
                            layout: 'bottomRight',
                            text: 'Se produjó un error actualizar el carrito',
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
        })

    </script>

@stop