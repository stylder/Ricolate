@extends('admin.layouts.admin-main')

@section('title')
    @parent Editar Producto {{ $product->sku }}
@stop

@section('content')
    <div class="container">
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <h1>Editar Producto</h1>
            </div>
        </div>
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel panel-body main-container">
                        <div class="row alert alert-info info-bar">
                            <div class="col-sm-12 filter-right">
                                <label id="lastModLabel">Última modificación</label>
                                <span aria-labelledby="#lastModLabel">{{ $product->getHumanUpdatedAt() }}</span>
                            </div>
                        </div>
                        @if($errors->any())
                            <div class="row">
                                <div class="col-sm-12 alert alert-danger">
                                    <h1>Error <span class="glyphicon glyphicon-exclamation-sign"></span></h1>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::open(['method' => 'PUT', 'route' => ['admin.products.update', $product->product_id],  'class' => 'primary-form']) !!}
                                                        {!! Form::label('name', 'Nombre') !!}
                                                        {!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('sku', 'SKU') !!}
                                                        {!! Form::text('sku', $product->sku, array('class' => 'form-control', 'placeholder' => 'SKU')) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('category_id', 'Categoría') !!}
                                                        <a data-toggle="modal" data-target="#new-category-modal" href="#" id="new_category" class="pull-right">
                                                            <span class="glyphicon glyphicon-plus"></span> Agregar Categoría
                                                        </a>
                                                        {!! Form::select('category_id', $categories, $product->category_id, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('manufacturer_id', 'Fabricante') !!}
                                                        <a data-toggle="modal" data-target="#new-manufacturer-modal" href="#" id="new_manufacturer" class="pull-right">
                                                            <span class="glyphicon glyphicon-plus"></span> Agregar Fabricante
                                                        </a>
                                                        {!! Form::select('manufacturer_id', $manufacturers, $product->manufacturer->manufacturer_id, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('price', 'Precio') !!}
                                                        {!! Form::text('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Precio']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('sale_price', 'Precio de Venta') !!}
                                                        {!! Form::text('sale_price', $product->sale_price, ['class' => 'form-control', 'placeholder' => 'Precio de Venta']) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('shipping_cost', 'Costo de Envío') !!}
                                                        {!! Form::text('shipping_cost', $product->shipping_cost, ['class' => 'form-control', 'placeholder' => 'Costo de Envío']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('tax_id', 'Tasa de impuesto') !!}
                                                        <a data-toggle="modal" data-target="#new-tax-modal" href="#" id="new_tax_rate" class="pull-right">
                                                            <span class="glyphicon glyphicon-plus"></span> Agregar Tasa
                                                        </a>
                                                        {!! Form::select('tax_id', $tax, $product->tax, ['class' => 'form-control', 'placeholder' => 'Tasa de impuesto']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label id="imgUploadLabel">Imagenes</label>
                                                    <div aria-labelledby="#imgUploadLabel" id="productImgUpload"></div>
                                                </div>
                                            </div>
                                            <div class="row" id="product-image-row">
                                                <div class="product-gallery-overlay"></div>
                                                @forelse($product->images as $image)
                                                    <div class="col-xs-6 col-md-4 row-top-buffer">
                                                        <a class="thumbnail">
                                                            <img src="{{ $image->image_path }}" />
                                                        </a>
                                                        <a class="btn btn-danger pull-right" data-toggle="modal" data-href="/admin/products/images/{{ $image->image_id }}" data-target="#delete-image-confirm"><span class="glyphicon  glyphicon glyphicon-remove"></span> Borrar</a>
                                                    </div>
                                                @empty
                                                    <div class="col-sm-12">
                                                        <h4 class="text-center">No se encontraron imagenes</h4>
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                {!! Form::label('short_desc', 'Descripción Corta') !!}
                                                {!! Form::textarea('short_desc', $product->short_desc, ['class' => 'form-control', 'placeholder' => 'Descripción Corta']) !!}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                {!! Form::label('long_desc', 'Descripción Larga') !!}
                                                {!! Form::textarea('long_desc', $product->long_desc, ['class' => 'form-control', 'placeholder' => 'Descripción Larga']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-sm-4">
                                                {!! Form::label('units_sold', 'Unidades Vendidas') !!}
                                                {!! Form::input('number', 'units_sold', $product->units_sold, ['class' => 'form-control', 'placeholder' => 'Unidades Vendidas']) !!}
                                            </div>
                                            <div class="form-group col-sm-4">
                                                {!! Form::label('number_available', 'En Stock') !!}
                                                {!! Form::input('number', 'number_available', $product->number_available, ['class' => 'form-control', 'placeholder' => 'En Stock']) !!}
                                            </div>
                                            <div class="form-group col-sm-4">
                                                {!! Form::label('active', 'Activo') !!}
                                                {!! Form::select('active', ['0' => 'No', '1' => 'Si'], $product->active, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    {!! Form::submit('Guardar Producto', ['class' => 'btn btn-primary btn-block']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials.add-tax-rate')
    @include('admin.partials.add-manufacturer')
    @include('admin.partials.add-category')
    @include('admin.partials.delete-image-confirm')
    @include('admin.partials.product-script')
    @include('admin.partials.confirm-add-product-image')
    @include('admin.partials.error')
    <script>

        editProduct = window.editProduct || {};

        //Pass product id to image delete modal
        $('#delete-image-confirm').on('show.bs.modal', function(e) {
            $(this).find('form').attr('action', $(e.relatedTarget).data('href'));
        });

        /**
         * Initialize the CropPic plugin.
         * http://www.croppic.net
         */
        var imgParams = {
            cropData: {
                "product_id": {{ $product->product_id }},
                "_token" : "{{ csrf_token() }}"
            },
            onAfterImgCrop: function()
            {
                $('#add-image-modal').modal();
            },
            onError: function()
            {
                $("#gen-error").modal();
            },
            doubleZoomControls: false,
            rotateControls: false,
            uploadUrl: '/admin/products/images',
            cropUrl: '/admin/products/images/crop',
            imgEyecandy: false,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
        }

        //Initialize the CropPic plugin with the above params.
        editProduct.imgUpload = new Croppic('productImgUpload', imgParams);

        /**
         * Reset the uploader on error.
         */
        $('#gen-error').on('hidden.bs.modal', function(e)
        {
            //Reset the uploader
            editProduct.imgUpload.destroy();
            editProduct.imgUpload = new Croppic('productImgUpload', imgParams);
        });

        /**
         * Reset the uploader and fetch latest images after a successful upload.
         */
        $('#add-image-modal').on('hidden.bs.modal', function(e)
        {
            //Reset the uploader
            editProduct.imgUpload.destroy();
            editProduct.imgUpload = new Croppic('productImgUpload', imgParams);
            $('.product-gallery-overlay').fadeIn();
            editProduct.getImages();
        });

        /**
         * Submit the delete image form via ajax.
         */
        $('form#delete-image-form').submit(function(e)
        {
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.post(url, data, function(d)
            {
                //Refresh the images
                $('.product-gallery-overlay').fadeIn();
                editProduct.getImages();
                //The modal method does not work on the submit event
                //So we click the cancel button to close the modal.
                $('#cancel-btn').click();
            });
            e.preventDefault();
        });

        /**
         * Get the latest set of images.
         */
        editProduct.getImages = function()
        {
            $.ajax({
                url: '/admin/products/' + {{ $product->product_id }} + '/edit',
                dataType: 'html',
                success: function(d) {
                    var imageDiv = $(d).find('#product-image-row');
                    $('#product-image-row').html(imageDiv).find('.product-gallery-overlay').show().fadeOut(500);

                }
            });
        }

        //Append CSRF token to image upload form.
        $('form.productImgUpload_imgUploadForm').append('<input type="hidden" name="_token" value="{{ csrf_token() }}">');
    </script>
@stop
