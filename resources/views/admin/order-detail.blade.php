@extends('admin.layouts.admin-main')

@section('title')
    @parent Detalle de Orden
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Detalle de Orden</h1>
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
                                                <h4>Dirección</h4>
                                                <p>{{ $order->customer->first_name }} {{ $order->customer->last_name }} <br />
                                                    {{ $order->customer->addr_street_1 }} <br />
                                                    @if(!empty($order->customer->addr_street_2))
                                                        {{ $order->customer->addr_street_2 }} <br />
                                                    @endif
                                                    {{ $order->customer->addr_city }}, {{ $order->customer->addr_state }} {{ $order->customer->addr_zip }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4>Fecha de Orden</h4>
                                                <p>
                                                    {{ $order->getFormattedCreatedAt() }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4 id="order_status">Estado de Orden</h4>
                                                {!! Form::open(['method' => 'PUT', 'route' => ['admin.orders.update', $order->order_id],  'id' => 'status-form']) !!}
                                                {!! Form::select('status', ['Shipped' => 'Enviado', 'Paid' => 'Pagado', 'Cancelled' => 'Cancelado'], $order->status, ['class' => 'form-control']) !!}
                                                <br />
                                                <button type="submit" class="btn btn-primary pull-right" aria-label="Save Changes">
                                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Save
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
                                <table id="admin_orders_list" class="table table-striped table-responsive table-hover table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th class="col-sm-3">SKU</th>
                                        <th class="col-sm-4">Producto</th>
                                        <th class="col-sm-2">Precio</th>
                                        <th class="col-sm-1">Cantidad</th>
                                        <th class="col-sm-2">Total</th>
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
                                            <td class="order-status-label">
                                                ${{ number_format($product->price, 2) }}
                                            </td>
                                            <td>
                                                {{ $product->quantity }}
                                            </td>
                                            <td>
                                                ${{ number_format($product->price * $product->quantity, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 pull-right">
                                <table class="table table-striped table-responsive table-hover table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="col-sm-6">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td class="col-sm-6">
                                            ${{ number_format($order->order_total - ($order->shipping_total + $order->tax_total), 2) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Envío</strong>
                                        </td>
                                        <td>
                                            ${{ number_format($order->shipping_total, 2) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Impuesto</strong>
                                        </td>
                                        <td>
                                            ${{ number_format($order->tax_total, 2) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Total</strong>
                                        </td>
                                        <td>
                                            ${{ number_format($order->order_total, 2) }}
                                        </td>
                                    </tr>
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
