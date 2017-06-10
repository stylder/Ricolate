<!--=== Header v5 ===-->
<div class="header-v5 header-static">
    <!-- Topbar v3 -->
    <div class="topbar-v3">
        <div class="search-open">
            <div class="container">
                <input type="text" class="form-control" placeholder="Search">
                <div class="search-close"><i class="icon-close"></i></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Topbar Navigation -->
                    <ul class="left-topbar">
                        <li>
                            <a>Email: ricolate.contacto@gmail.com </a>

                        </li>
                        <li>
                            <a>LLámanos: +52 492 150 7180</a>
                        </li>
                    </ul><!--/end left-topbar-->
                </div>
                <div class="col-sm-6">
                    <ul class="list-inline right-topbar pull-right">
                        <li><a href="#">Account</a></li>
                        <li><a href="shop-ui-add-to-cart.html">Wishlist (0)</a></li>
                        <li><a href="shop-ui-login.html">Login</a> | <a href="shop-ui-register.html">Register</a></li>
                        <li><i class="search fa fa-search search-button"></i></li>
                    </ul>
                </div>
            </div>
        </div><!--/container-->
    </div>
    <!-- End Topbar v3 -->

    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="" href="/">
                    <img id="logo-header" class="img-responsive" src="/images/logo/logo.png" alt="Logo">
                </a>
            </div>


            <!-- Shopping Cart -->
            <div class="shop-badge badge-icons pull-right">
                <a href="/cart"><i class="fa fa-shopping-cart"></i></a>

                <span class="badge badge-sea rounded-x">{{1}}</span>
                <div class="badge-open">
                    <ul class="list-unstyled mCustomScrollbar" data-mcs-theme="minimal-dark">
                        <li>
                            <img src="/frontend/assets/img/thumb/05.jpg" alt="">
                            <button type="button" class="close">×</button>
                            <div class="overflow-h">
                                <span>Black Glasses</span>
                                <small>1 x $400.00</small>
                            </div>
                        </li>
                        <li>
                            <img src="/frontend/assets/img/thumb/02.jpg" alt="">
                            <button type="button" class="close">×</button>
                            <div class="overflow-h">
                                <span>Black Glasses</span>
                                <small>1 x $400.00</small>
                            </div>
                        </li>
                        <li>
                            <img src="/frontend/assets/img/thumb/03.jpg" alt="">
                            <button type="button" class="close">×</button>
                            <div class="overflow-h">
                                <span>Black Glasses</span>
                                <small>1 x $400.00</small>
                            </div>
                        </li>
                    </ul>
                    <div class="subtotal">
                        <div class="row">
                            <div class="col-xs-6">

                            </div>
                            <div class="col-xs-6">
                                <a href="cart/" class="btn-u btn-u-sea-shop btn-block">Ver Carro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Shopping Cart -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <!-- Nav Menu -->
                <ul class="nav navbar-nav">
                    <!-- Pages -->
                    <li class="dropdown active">
                        <a href="/productos" class="dropdown-toggle">
                            Productos
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Promotion -->
                    <li class="dropdown">
                        <a href="/contacto" class="dropdown-toggle">
                            Contacto
                        </a>
                    </li>
                    <!-- End Promotion -->

                    <li class="dropdown active">
                        <a href="/acercanosotros" class="dropdown-toggle">
                            Acerca Nosotros
                        </a>
                    </li>
                    <!-- Promotion -->
                    <li class="dropdown">
                        <a href="/ubicacion" class="dropdown-toggle">
                            Ubicación
                        </a>

                    </li>
                    <!-- End Promotion -->


                    <li class="dropdown">

                        <a class="dropdown-toggle">
                            <form role="search" action="/search" method="GET">
                                <div class="input-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control quantity-field" placeholder="Buscar productos ...">
                                    <span class="input-group-btn">
							    <button class=" btn btn-u-sea-shop"><i class="fa fa-search"></i></button>
						        </span>
                                </div>
                            </form>

                        </a>


                    </li>

                </ul>
                <!-- End Nav Menu -->
            </div>
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v5 ===-->
