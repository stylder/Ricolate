@extends('admin.layouts.admin-main')

@section('title')
    @parent Productos
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="inline">Productos</h1>
                <a href="/admin/products/create" class="btn btn-primary pull-right">
                    <span class="glyphicon glyphicon-plus"></span> <h6 class="inline">Agregar Producto</h6>
                </a>
            </div>
        </div>
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table id="admin_products_list" class="table table-striped table-responsive table-hover table-bordered text-center">
                            <thead>
                            <tr>
                                <th class="col-sm-2">SKU</th>
                                <th class="col-sm-2">Nombre</th>
                                <th class="col-sm-2">Fabricante</th>
                                <th class="col-sm-2">Categoría</th>
                                <th class="col-sm-1">Precio</th>
                                <th class="col-sm-1">#</th>
                                <th class="col-sm-2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>
                                        {{ $product->sku }}
                                    </td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->manufacturer->manufacturer }}
                                    </td>
                                    <td>
                                        {{ $product->category->category }}
                                    </td>
                                    <td>
                                        {{ $product->price }}
                                    </td>
                                    <td>
                                        {{ $product->number_available }}
                                    </td>
                                    <td class="order-action-icons">
                                        <a class="btn btn-danger" data-toggle="modal" data-href="/admin/products/{{ $product->product_id }}" data-target="#delete-confirm">
                                            <span class="glyphicon  glyphicon glyphicon-remove"></span>Borrar
                                        </a>

                                        <a href="/admin/products/{{ $product->product_id }}/edit" class="btn btn-info">
                                            <span class="glyphicon  glyphicon glyphicon-pencil"></span>Editar
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <h1 class="text-center">No hay productos!</h1>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-labelledby="confirmHead" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="confirmHead">
¿Confirmar eliminación??</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Estás seguro de que quieres eliminar este producto?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['method' => 'DELETE']) !!}

                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-ok']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /**
         * Pass the data-href property to the modal window and use it as the form action.
         * This is used for deleting products.
         */
        $('#delete-confirm').on('show.bs.modal', function(e) {
            $(this).find('form').attr('action', $(e.relatedTarget).data('href'));
        });
    </script>
@stop
