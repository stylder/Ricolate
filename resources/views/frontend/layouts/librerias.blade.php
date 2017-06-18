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

<script src="{{asset('js/handlebars.js')}}"></script>




<script>
    jQuery(document).ready(function () {
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
        console.log("ready librerías")
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->