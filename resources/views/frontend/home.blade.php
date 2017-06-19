@extends('frontend.layouts.main')

@section('title')
    @parent Bienvenido
@stop

@section('content')

    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @forelse($slides as $slide)

                    <!-- SLIDE -->
                        <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000"
                            data-title="{{ $slide->titulo }}">
                            <!-- MAIN IMAGE -->
                            <img src="{{ $slide->image_path }}" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top"
                                 data-bgrepeat="no-repeat">

                            <div class="tp-caption revolution-ch3 sft start"
                                 data-x="center"
                                 data-hoffset="0"
                                 data-y="140"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endeasing="Power1.easeIn"
                                 data-endspeed="300">
                                 <strong>{{ $slide->titulo }}</strong>
                            </div>

                            <!-- LAYER -->
                            <div class="tp-caption revolution-ch4 sft"
                                 data-x="center"
                                 data-hoffset="-14"
                                 data-y="210"
                                 data-speed="1400"
                                 data-start="2000"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6">
                                {{ $slide->descripcion }}
                            </div>

                            <!-- LAYER -->
                            <div class="tp-caption sft"
                                 data-x="center"
                                 data-hoffset="0"
                                 data-y="300"
                                 data-speed="1600"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6">
                                <a href="{{ $slide->href }}" class="btn-u btn-brd btn-brd-hover btn-u-light">Acceder</a>
                            </div>
                        </li>
                        <!-- END SLIDE -->


                @empty
                        <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000"
                            data-title="Slide 1">
                            <!-- MAIN IMAGE -->
                            <img src="....." alt="darkblurbg" data-bgfit="cover"
                                 data-bgposition="left top"
                                 data-bgrepeat="no-repeat">

                            <div class="tp-caption revolution-ch1 sft start"
                                 data-x="center"
                                 data-hoffset="0"
                                 data-y="100"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endeasing="Power1.easeIn"
                                 data-endspeed="300">
                                The New <br>
                                <strong>Collection</strong><br>
                                is here
                            </div>

                            <!-- LAYER -->
                            <div class="tp-caption sft"
                                 data-x="center"
                                 data-hoffset="0"
                                 data-y="380"
                                 data-speed="1600"
                                 data-start="1800"
                                 data-easing="Power4.easeOut"
                                 data-endspeed="300"
                                 data-endeasing="Power1.easeIn"
                                 data-captionhidden="off"
                                 style="z-index: 6">
                                <a href="....." class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
                            </div>
                        </li>
            @endforelse
            <!-- SLIDE -->


            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!--=== End Slider ===-->



<!--=== Product Content ===-->
    <div class="container content-md">

        <div class="heading heading-v1 margin-bottom-20">
            <h2>Productos Destacados</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed,
                placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc
                lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider">
                @if(isset($sales))
                    @foreach($sales as $item)
                        <li class="item">
                            <div class="product-img">
                                <a href="/producto/{{ $item->product_id }}"><img class="full-width img-responsive"
                                                                                 src="{{ isset($item->images->first()->image_path) ? $item->images->first()->image_path : 'http://placehold.it/221x221' }}"
                                                                                 alt=""></a>
                                <a class="product-review" href="/producto/{{ $item->product_id }}">{{ $item->name }}</a>
                                {!! Form::open(['method' => 'POST', 'url' => ['/cart/add/' .  $item->product_id], 'class'=>'producto-form']) !!}
                                {!! Form::hidden('id',$item->product_id) !!}
                                {!! Form::button('<i class="fa fa-shopping-cart"></i>Agregar al Carrito', ['class' => 'add-to-cart', 'type' => 'submit']) !!}
                                {!! Form::close() !!}
                            </div>
                            <div class="product-description product-description-brd">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="/producto/{{ $item->product_id }}">{{ $item->short_desc }}</a></h4>
                                        <span class="gender text-uppercase">{{ $item->manufacturer->manufacturer }}</span>

                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li class="list-group-item">
                        <h4 class="text-center">No current sales</h4>
                        <h5 class="text-center">Check back soon!</h5>
                    </li>
                @endif
            </ul>
        </div>
        <!--=== End Illustration v2 ===-->


        <!--=== End Illustration v2 ===-->
    </div>
    <!--=== End Product Content ===-->


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