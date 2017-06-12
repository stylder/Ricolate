@extends('frontend.layouts.main')

@section('title')
    @parent Dónde nos ubicamos
@stop

@section('content')

    @include('frontend.partials.breadcrumbs',
    ['titulo' => 'Nos encontramos en..',
    'p1'=>'home',
    'p1_url'=>'/',
    'p2'=>'Ubicación',
    'img'=>'/frontend/assets/img/breadcrumbs-img.jpg'])
    <!--=== End Breadcrumbs v4 ===-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14727.918990714317!2d-102.9959519!3d22.6545437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1782de787f000920!2sRicolate!5e0!3m2!1ses!2smx!4v1497121345118" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
@stop
@section('scripts')


@stop