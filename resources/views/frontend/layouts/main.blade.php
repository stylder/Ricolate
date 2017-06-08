<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es"> <!--<![endif]-->
<head>
    <title>Ricolate - @yield('title', 'Bienvenido')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Santiago García Cabral">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css'
          href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/shop.style.css')}}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/headers/header-v5.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/footers/footer-v4.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/revolution-slider/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/master-slider/masterslider/style/masterslider.css')}}">
    <link rel='stylesheet' href="{{asset('frontend/assets/plugins/master-slider/masterslider/skins/default/style.css')}}">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme-colors/default.css')}}" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
</head>

<body class="header-fixed">

<div class="wrapper">

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')
</div><!--/wrapper-->


<!-- JS Global Compulsory -->
<script src="{{asset('frontend/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('frontend/assets/plugins/back-to-top.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/smoothScroll.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/jquery.parallax.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- JS Customization -->
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
<!-- JS Page Level -->
<script src="{{asset('frontend/assets/js/shop.app.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/owl-carousel.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/revolution-slider.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/style-switcher.js')}}"></script>
<script src="{{asset('js/handlebars.js')}}"></script>
<script>
    jQuery(document).ready(function () {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

@yield('scripts')
</body>
</html>
