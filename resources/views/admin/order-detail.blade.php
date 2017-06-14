@extends('admin.layouts.admin-main')

@section('title')
    @parent Detalle de Orden
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Detalle de Cotización</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4>Datos Solicitante</h4>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td>Nombre</td>
                                                        <td>{{ $order->customer->nombre }} {{ $order->customer->apellidos }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Correo</td>
                                                        <td>{{ $order->customer->correo }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Teléfono</td>
                                                        <td>{{ $order->customer->telefono }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dirección</td>
                                                        <td>{{ $order->customer->calle }} {{ $order->customer->numero}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colonia</td>
                                                        <td>{{ $order->customer->colonia }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Municipio</td>
                                                        <td>{{ $order->customer->municipio }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estado</td>
                                                        <td>{{ $order->customer->estado }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Código Postal &nbsp;</td>
                                                        <td>{{ $order->customer->postal }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4>Datos Empresa</h4>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td>Nombre Empresa&nbsp;</td>
                                                        <td>{{ $order->customer->compania }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RFC</td>
                                                        <td>{{ $order->customer->rfc }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4>Notas</h4>
                                                <p>
                                                    {{ $order->customer->notas }}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4>Fecha de Cotización</h4>
                                                <p>
                                                    {{ $order->getFormattedCreatedAt() }}
                                                </p>
                                            </div>

                                            <div class="panel-body">
                                                <h4 id="order_status">Estado de Cotización</h4>
                                                {!! Form::open(['method' => 'PUT', 'route' => ['admin.orders.update', $order->order_id],  'id' => 'status-form']) !!}
                                                {!! Form::select('status',
                                                                    ['Shipped' => 'Enviado', 'Paid' => 'Pagado', 'Cancelled' => 'Cancelado'],
                                                                    $order->status, ['class' => 'form-control']) !!}
                                                <br/>
                                                <button type="submit" class="btn btn-primary pull-right"
                                                        aria-label="Save Changes">
                                                    <span class="glyphicon glyphicon-floppy-disk"
                                                          aria-hidden="true"></span> Guardar
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="admin_orders_list"
                                       class="table table-striped table-responsive table-hover table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th class="col-sm-3">SKU</th>
                                        <th class="col-sm-4">Producto</th>

                                        <th class="col-sm-1">Cantidad</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->products as $product)
                                        <tr>
                                            <td>
                                                {{ $product->sku }}
                                            </td>
                                            <td>
                                                {{ $product->name }}
                                            </td>

                                            <td>
                                                {{ $product->quantity }}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
