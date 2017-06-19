@extends('admin.layouts.admin-main')

@section('title')
    @parent Agregar Slide
@stop

@section('content')
<div class="container" id="slide-edit-main">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="inline">Agregar Slide</h1>
        </div>
        <div class="col-sm-2 panel-body">
            <a href="/admin/slideshow" class="btn btn-primary pull-right"aria-label="Save Changes">
                <span class="glyphicon fa fa-long-arrow-left" aria-hidden="true"></span> Regresar
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="row row-top-buffer" id="new-slide">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-body slide" id="new-slide-upload">
                                    <button type="button" class="btn btn-primary col-xs-2 col-xs-offset-5 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5" aria-label="Upload Image" id="upload">
                                        <h3 class="inline">Buscar</h3>
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-info">
                                                <h3 class="text-center">Instrucciones</h3>
                                                <hr />
                                                <ol class="slide-instructions">
                                                    <li>Haga clic en el botón Examinar y seleccione una imagen (PNG, GIF o JPG) para cargar.</li>
                                                    <li>Haga clic y arrastre la imagen dentro del cuadro para seleccionar el área visible adecuada.</li>
                                                    <li>Haga clic en el icono de recorte.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="slide-save-confirm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Éxito!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>El slide ha sido guardado!</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.partials.error')
    </div>
    <script>
        /**
         * Initialize the CropPic plugin.
         * http://www.croppic.net
         */
        var slideParams = {
            cropData: {
                "slideshow": 1,
                "count": {{ $count }},
                "_token" : "{{ csrf_token() }}"
            },
            onAfterImgCrop: function()
            {
                //Display success modal on when the image is successfully cropped.
                $('#slide-save-confirm').modal();
            },
            onError: function()
            {
                $("#gen-error").modal();
            },
            doubleZoomControls: false,
            rotateControls: false,
            customUploadButtonId: 'upload',
            uploadUrl: '/admin/slideshow',
            cropUrl: '/admin/slideshow/crop',
            imgEyecandy: false,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
        };

        //Initialize the CropPic plugin with the above params
        var slideUpload = new Croppic('new-slide-upload', slideParams);

        /**
         * Redirect the user to the Slideshow Editor page when the success modal is hidden.
         */
        $('#slide-save-confirm').on('hidden.bs.modal', function(e)
        {
            window.location.href = '/admin/slideshow';
        });

        /**
         * Refresh the page after the modal error window is closed.
         * This is done to re-initialize the CropPic plugin.
         */
        $('#gen-error').on('hidden.bs.modal', function(e)
        {
            window.location.href = '/admin/slideshow/create';
        });

        //Append CSRF token to image upload form.
        $('form.new-slide-upload_imgUploadForm').append('<input type="hidden" name="_token" value="{{ csrf_token() }}">');
    </script>
@stop