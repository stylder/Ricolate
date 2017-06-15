<!DOCTYPE html>
<!--[if IE 8]>
<html lang="es" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="es" class="ie9"> <![endif]-->
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
    <link rel="shortcut icon" href="/images/logo/logo.png">

    @include('frontend.layouts.estilos')

</head>

<body class="header-fixed">

<div class="wrapper">

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')
</div><!--/wrapper-->

@include('frontend.layouts.librerias')

@yield('scripts')

</body>
</html>
