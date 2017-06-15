@extends('frontend.layouts.main')

@section('title')
    @parent {{ $product->name }} - {{ $product->manufacturer->manufacturer }}
@stop

@section('content')
    <!--=== Shop Product ===-->
    <div class="padding-top-5">


        @include('frontend.partials.breadcrumbs',
        ['titulo' => " $product->name",
        'p1'=>'home',
        'p1_url'=>'/',
        'p2'=>$product->manufacturer->manufacturer,
        'img'=>'/frontend/assets/img/breadcrumbs-img.jpg'])


        <div class="shop-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="ms-showcase2-template">
                            <!-- Master Slider -->
                            <div class="master-slider ms-skin-default" id="masterslider">
                                <div class="ms-slide">
                                    <img class="ms-brd"
                                         src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}"/>
                                    <img class="ms-thumb"
                                         src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}"
                                         alt="thumb">
                                </div>

                                @forelse($product->images as $image)
                                    <div class="ms-slide">
                                        <img class="ms-brd" src="{{ $image->image_path }}"
                                             data-src="{{ $image->image_path }}" alt="lorem ipsum dolor sit">
                                        <img class="ms-thumb" src="{{ $image->image_path }}" alt="thumb">
                                    </div>
                                @empty
                                    <img src="http://placehold.it/221x221" data-src="http://placehold.it/221x221"
                                         alt="lorem ipsum dolor sit">
                                @endforelse
                            </div>
                            <!-- End Master Slider -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="shop-product-heading">
                            <h2>{{ $product->name }}</h2>
                            <ul class="list-inline shop-product-social">
                                <li><a href="https://www.facebook.com/Ricolate.Insumos/"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div><!--/end shop product social-->
                            <p class="text-justify">
                                    {{ $product->long_desc }}
                            </p>
                        <br>


                        <div class="margin-bottom-40">

                            {!! Form::open(['method' => 'POST', 'url' => ['/cart/add/' . $product->product_id]]) !!}
                            {!! Form::button('Agregar al Carro', ['class' => 'btn-u btn-u-sea-shop btn-u-lg', 'type' => 'submit']) !!}
                            {!! Form::close() !!}

                        </div><!--/end product quantity-->


                        <p class="wishlist-category"><strong>Categoría:</strong> <a
                                    href="#">{{ $product->manufacturer->manufacturer }}</a></p>
                    </div>
                </div><!--/end row-->
            </div>
        </div>


        <!--=== Illustration v2 ===-->
        <div class="container">
            <div class="heading heading-v1 margin-bottom-20">
                <h2>PRODUCTO QUE PUEDE GUSTAR</h2>
            </div>

            <div class="illustration-v2 margin-bottom-60">

                <ul class="list-inline owl-slider-v4">
                    @foreach($related as $product)

                        <li class="item">
                            <a href="/producto/{{ $product->product_id }}"><img class="img-responsive"
                                                                                src="{{ (count($product->images)) ? $product->images->first()->image_path : 'http://placehold.it/221x221' }}"
                                                                                alt=""></a>
                            <div class="product-description-v2">
                                <div class="margin-bottom-5">
                                    <h4 class="title-price"><a href="#">{{ $product->name }}</a></h4>
                                </div>
                            </div>
                        </li>

                    @endforeach

                </ul>
                <div class="customNavigation margin-bottom-25">
                    <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                    <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <!--=== End Illustration v2 ===-->


    </div>

@stop

@section('scripts')
    <script src="{{asset('/frontend/assets/plugins/master-slider/masterslider/masterslider.min.js')}}"></script>
    <script src="{{asset('/frontend/assets/js/plugins/master-slider.js')}}"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });
    </script>
@stop

