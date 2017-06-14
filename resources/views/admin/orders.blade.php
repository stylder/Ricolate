@extends('admin.layouts.admin-main')

@section('title')
    @parent Ordenes
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Cotizaciones</h1>
            </div>
        </div>
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table id="admin_orders_list" class="table table-striped table-responsive table-hover table-bordered text-center">
                            <thead>
                            <tr>
                                <th class="col-sm-2">Fecha</th>
                                <th class="col-sm-2">Usuario</th>
                                <th id="order_status" class="col-sm-2">Status</th>
                                <th class="col-sm-2">Orden #</th>
                                <th class="col-sm-2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>
                                        {{ $order->getFormattedCreatedAt() }} <br />
                                    </td>
                                    <td>
                                        {{ $order->customer->nombre }} {{ $order->customer->apellidos }}
                                    </td>

                                    <td class="order-status-label">
                                        @if($order->status === 'Paid')
                                            <span class="label label-primary">Pagado</span>
                                        @elseif($order->status === 'Quotation')
                                            <span class="label label-success">Cotización</span>
                                        @elseif($order->status === 'Cancelled')
                                        @elseif($order->status === 'Shipped')
                                            <span class="label label-success">Enviado</span>
                                        @elseif($order->status === 'Cancelled')
                                            <span class="label label-danger">Cancelado</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $order->order_id }}
                                    </td>

                                    <td class="order-action-icons">
                                        <a class="btn btn-danger" data-toggle="modal" data-href="/admin/orders/{{ $order->order_id }}" data-target="#delete-confirm"><span class="glyphicon  glyphicon glyphicon-remove"></span> Borrar</a>
                                        <a href="/admin/orders/{{ $order->order_id }}" class="order-edit btn btn-info"><span class="glyphicon  glyphicon glyphicon-pencil"></span> Editar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                       <h3 class="text-center">No tienes cotizaciones</h3>
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
                                        <h4 class="confirmHead">¿Desea Eliminar?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Estás seguro de que quieres eliminar esta cotización??</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['method' => 'DELETE']) !!}
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
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
         * This is used for deleting orders.
         */
        $('#delete-confirm').on('show.bs.modal', function(e) {
            $(this).find('form').attr('action', $(e.relatedTarget).data('href'));
        });
    </script>

@stop
