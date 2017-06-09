@extends('frontend.layouts.main')

@section('title')
    @parent Tu Carro
@stop

@section('content')

    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Check Out</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Medium Part ===-->
    <div class="content-md margin-bottom-30">
        <div class="container">
            <form class="shopping-cart" action="#">
                <div>
                    <div class="header-tags">
                        <div class="overflow-h">
                            <h2>Carrito de compras</h2>
                            <p>Revisar y edita sus productos</p>
                            <i class="rounded-x fa fa-check"></i>
                        </div>
                    </div>

                    @include('frontend.partials.productos')

                    <div class="header-tags">
                        <div class="overflow-h">
                            <h2>Billing info</h2>
                            <p>Shipping and address infot</p>
                            <i class="rounded-x fa fa-home"></i>
                        </div>
                    </div>
                    <section class="billing-info">
                        <div class="row">
                            <div class="col-md-6 md-margin-bottom-40">
                                <h2 class="title-type">Billing Address</h2>
                                <div class="billing-info-inputs checkbox-list">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input id="name" type="text" placeholder="First Name" name="firstname" class="form-control required">
                                            <input id="email" type="text" placeholder="Email" name="email" class="form-control required email">
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="surname" type="text" placeholder="Last Name" name="lastname" class="form-control required">
                                            <input id="phone" type="tel" placeholder="Phone" name="phone" class="form-control required">
                                        </div>
                                    </div>
                                    <input id="billingAddress" type="text" placeholder="Address Line 1" name="address1" class="form-control required">
                                    <input id="billingAddress2" type="text" placeholder="Address Line 2" name="address2" class="form-control required">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input id="city" type="text" placeholder="City" name="city" class="form-control required">
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="zip" type="text" placeholder="Zip/Postal Code" name="zip" class="form-control required">
                                        </div>
                                    </div>

                                    <label class="checkbox text-left">
                                        <input type="checkbox" name="checkbox"/>
                                        <i></i>
                                        Ship item to the above billing address
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h2 class="title-type">Shipping Address</h2>
                                <div class="billing-info-inputs checkbox-list">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input id="name2" type="text" placeholder="First Name" name="firstname" class="form-control">
                                            <input id="email2" type="text" placeholder="Email" name="email" class="form-control email">
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="surname2" type="text" placeholder="Last Name" name="lastname" class="form-control">
                                            <input id="phone2" type="tel" placeholder="Phone" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <input id="shippingAddress" type="text" placeholder="Address Line 1" name="address1" class="form-control">
                                    <input id="shippingAddress2" type="text" placeholder="Address Line 2" name="address2" class="form-control">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input id="city2" type="text" placeholder="City" name="city" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="zip2" type="text" placeholder="Zip/Postal Code" name="zip" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="header-tags">
                        <div class="overflow-h">
                            <h2>Payment</h2>
                            <p>Select Payment method</p>
                            <i class="rounded-x fa fa-credit-card"></i>
                        </div>
                    </div>
                    <section>
                        <div class="row">
                            <div class="col-md-6 md-margin-bottom-50">
                                <h2 class="title-type">Choose a payment method</h2>
                                <!-- Accordion -->
                                <div class="accordion-v2">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <i class="fa fa-credit-card"></i>
                                                        Credit or Debit Card
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body cus-form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 no-col-space control-label">Cardholder Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control required" name="cardholder" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 no-col-space control-label">Card Number</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control required" name="cardnumber" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 no-col-space control-label">Payment Types</label>
                                                        <div class="col-sm-8">
                                                            <ul class="list-inline payment-type">
                                                                <li><i class="fa fa-cc-paypal"></i></li>
                                                                <li><i class="fa fa-cc-visa"></i></li>
                                                                <li><i class="fa fa-cc-mastercard"></i></li>
                                                                <li><i class="fa fa-cc-discover"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4">Expiration Date</label>
                                                        <div class="col-sm-8 input-small-field">
                                                            <input type="text" name="mm" placeholder="MM" class="form-control required sm-margin-bottom-20">
                                                            <span class="slash">/</span>
                                                            <input type="text" name="yy" placeholder="YY" class="form-control required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 no-col-space control-label">CSC</label>
                                                        <div class="col-sm-8 input-small-field">
                                                            <input type="text" name="number" placeholder="" class="form-control required">
                                                            <a href="#">What's this?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        <i class="fa fa-paypal"></i>
                                                        Pay with PayPal
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="content margin-left-10">
                                                    <a href="#"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_150x38.png" alt="PayPal"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion -->
                            </div>

                            <div class="col-md-6">
                                <h2 class="title-type">Frequently asked questions</h2>
                                <!-- Accordion -->
                                <div class="accordion-v2 plus-toggle">
                                    <div class="panel-group" id="accordion-v2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseOne-v2">
                                                        What payments methods can I use?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne-v2" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit, felis vel tincidunt sodales, urna metus rutrum leo, sit amet finibus velit ante nec lacus. Cras erat nunc, pulvinar nec leo at, rhoncus elementum orci. Nullam ut sapien ultricies, gravida ante ut, ultrices nunc.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseTwo-v2">
                                                        Can I use gift card to pay for my purchase?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo-v2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit, felis vel tincidunt sodales, urna metus rutrum leo, sit amet finibus velit ante nec lacus. Cras erat nunc, pulvinar nec leo at, rhoncus elementum orci. Nullam ut sapien ultricies, gravida ante ut, ultrices nunc.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseThree-v2">
                                                        Will I be charged when I place my order?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree-v2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit, felis vel tincidunt sodales, urna metus rutrum leo, sit amet finibus velit ante nec lacus. Cras erat nunc, pulvinar nec leo at, rhoncus elementum orci. Nullam ut sapien ultricies, gravida ante ut, ultrices nunc.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion-v2" href="#collapseFour-v2">
                                                        How long will it take to get my order?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour-v2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit, felis vel tincidunt sodales, urna metus rutrum leo, sit amet finibus velit ante nec lacus. Cras erat nunc, pulvinar nec leo at, rhoncus elementum orci. Nullam ut sapien ultricies, gravida ante ut, ultrices nunc.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordion -->
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div><!--/end container-->
    </div>


    <!--=== End Content Medium Part ===-->
@stop

@section('scripts')
    <script>
        jQuery(document).ready(function() {
            StepWizard.initStepWizard();
        });
    </script>
@stop