@extends('frontend.layouts.main')

@section('title')
    @parent {{ $product->name }} - {{ $product->manufacturer->manufacturer }}
@stop

@section('content')
    <!--=== Shop Product ===-->
    <div class="shop-product">
        <!-- Breadcrumbs v5 -->
        <div class="container">
            <ul class="breadcrumb-v5">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Products</a></li>
                <li class="active">New</li>
            </ul>
        </div>
        <!-- End Breadcrumbs v5 -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 md-margin-bottom-50">
                    <div class="ms-showcase2-template">
                        <!-- Master Slider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                            <div class="ms-slide">
                                <img class="ms-brd" src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}" />
                                <img class="ms-thumb" src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}"  alt="thumb">
                            </div>

                                @forelse($product->images as $image)
                                    <div class="ms-slide">
                                        <img class="ms-brd"  src="{{ $image->image_path }}" data-src="{{ $image->image_path }}" alt="lorem ipsum dolor sit">
                                        <img class="ms-thumb" src="{{ $image->image_path }}" alt="thumb">
                                    </div>
                                @empty
                                    <img src="http://placehold.it/221x221" data-src="http://placehold.it/221x221" alt="lorem ipsum dolor sit">
                                @endforelse
                        </div>
                        <!-- End Master Slider -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shop-product-heading">
                        <h2>{{ $product->name }}</h2>
                        <ul class="list-inline shop-product-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div><!--/end shop product social-->


                    {{ $product->long_desc }}
                    <br>



                    <div class="margin-bottom-40">

                        {!! Form::open(['method' => 'POST', 'url' => ['/cart/add/' . $product->product_id]]) !!}
                        {!! Form::button('Agregar al Carro', ['class' => 'btn-u btn-u-sea-shop btn-u-lg', 'type' => 'submit']) !!}
                        {!! Form::close() !!}

                    </div><!--/end product quantity-->


                    <p class="wishlist-category"><strong>Categoría:</strong> <a href="#">{{ $product->manufacturer->manufacturer }}</a></p>
                </div>
            </div><!--/end row-->
        </div>
    </div>
    <!--=== End Shop Product ===-->

   {{--

    <div class="container">
        <div class="row row-top-buffer">
            <div class="col-sm-8">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>{{ $product->manufacturer->manufacturer }}</h1>
                            <h2>{{ $product->name }}</h2>
                            <h4>${{ $price }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="thumbnail" id="detail-primary-image">
                                <img class="inline" src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}" />
                            </div>
                            <div class="row">
                                <div class="col-sm-12 detail-thumbnails">
                                    @forelse($product->images as $image)
                                        <a class="col-sm-4 thumbnail">
                                            <img src="{{ $image->image_path }}" />
                                        </a>
                                    @empty
                                        <a class="col-sm-4 thumbnail">
                                            <img src="http://placehold.it/221x221" />
                                        </a>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <p class="lead">{{ $product->long_desc }}</p>
                            {!! Form::open(['method' => 'POST', 'url' => ['/cart/add/' . $product->product_id]]) !!}
                                {!! Form::button('Add to Cart', ['class' => 'btn btn-lg btn-success', 'type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4>Compártelo</h4>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=http://justinc.me&amp;p[title]=fooCart by Justin Christenson&amp;p[summary]=fooCart by Justin Christenson">
                                            <img src="http://cart.dev/images/facebook.png">
                                        </a>
                                    </div>
                                    <div class="col-sm-3 text-center">
                                        <a target="_blank" href="https://plus.google.com/share?url=http://justinc.me">
                                            <img class="" src="/images/google_plus.png" />
                                        </a>
                                    </div>
                                    <div class="col-sm-3 text-center">
                                        <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><img src='/images/pinterest.png'/></a>
                                    </div>
                                    <div class="col-sm-3 text-center">
                                        <a target="_blank" href="https://twitter.com/intent/tweet?url=http://justinc.me/&amp;text=Justin Christensons PHP Portfolio from @justincdotme&amp;via=justincdotme">
                                            <img class="" src="/images/twitter.png" />
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4>Relacionado</h4>
                            </li>
                            @foreach($related as $product)
                                <li class="list-group-item">
                                    <a href="/products/{{ $product->product_id }}">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="list-group-item-heading">{{ $product->manufacturer->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class=" thumbnail">
                                                    <img src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="list-group-item-text">{{ $product->name }}</p>
                                                <p class="list-group-item-text">{{ $product->short_desc }}</p>
                                                <span class="badge">${{ $product->price }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@stop
@section('scripts')

    <!-- Master Slider -->
    <script src="{{asset('/frontend/assets/plugins/master-slider/masterslider/masterslider.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/plugins/master-slider.js')}}"></script>

    <script>
        jQuery(document).ready(function() {
            App.init();
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });
    </script>
@stop