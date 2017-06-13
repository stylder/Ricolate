@extends('admin.layouts.admin-main')

@section('title')
    @parent Agregar Producto
@stop

@section('content')
    <div class="container">
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <h1>{{ $title or 'Producto' }}</h1>
            </div>
        </div>
        <div class="row row-top-buffer">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel panel-body main-container">
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
                                                        {!! Form::open(['method' => 'POST', 'route' => ['admin.products.store'],  'class' => 'primary-form']) !!}
                                                        {!! Form::label('name', 'Nombre') !!}
                                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('sku', 'SKU') !!}
                                                        {!! Form::text('sku', null, array('class' => 'form-control', 'placeholder' => 'SKU')) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('category_id', 'Categoría') !!}
                                                        <a data-toggle="modal" data-target="#new-category-modal" href="#" id="new_category" class="pull-right">
                                                            <span class="glyphicon glyphicon-plus"></span> Agregar Categoría
                                                        </a>
                                                        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('manufacturer_id', 'Fabricante') !!}
                                                        <a data-toggle="modal" data-target="#new-manufacturer-modal" href="#" id="new_manufacturer" class="pull-right">
                                                            <span class="glyphicon glyphicon-plus"></span> Agregar Fabricante
                                                        </a>
                                                        {!! Form::select('manufacturer_id', $manufacturers, null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                      {{--          <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('price', 'Precio') !!}
                                                        {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Precio']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('sale_price', 'Precio de Venta') !!}
                                                        {!! Form::text('sale_price', null, ['class' => 'form-control', 'placeholder' => 'Precio de Venta']) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('shipping_cost', 'Costo de Envío') !!}
                                                        {!! Form::text('shipping_cost', null, ['class' => 'form-control', 'placeholder' => 'Costo de Envío']) !!}
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        {!! Form::label('tax_id', 'Tax Rate') !!}
                                                        <a data-toggle="modal" data-target="#new-tax-modal" href="#" id="new_tax_rate" class="pull-right">
                                                            <span class="glyphicon glyphicon-plus"></span> Agregar Tasa de Impuesto
                                                        </a>
                                                        {!! Form::select('tax_id', $tax, null, ['class' => 'form-control', 'placeholder' => 'Tasa de Impuesto']) !!}
                                                    </div>
                                                </div>--}}
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
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('short_desc', 'Descripción Corta') !!}
                                                {!! Form::textarea('short_desc', null, ['class' => 'form-control', 'placeholder' => 'Descripción Corta']) !!}
                                            </div>
                                            <div class="form-group col-sm-6">
                                                {!! Form::label('long_desc', 'Descripción Larga') !!}
                                                {!! Form::textarea('long_desc', null, ['class' => 'form-control', 'placeholder' => 'Descripción Larga']) !!}
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
                                            {{--<div class="form-group col-sm-4">
                                                {!! Form::label('units_sold', 'Unidades Vendidas') !!}
                                                {!! Form::input('number', 'units_sold', 0, ['class' => 'form-control', 'placeholder' => 'Unidades Vendidas']) !!}
                                            </div>
                                            <div class="form-group col-sm-4">
                                                {!! Form::label('number_available', 'En Stock') !!}
                                                {!! Form::input('number', 'number_available', 0, ['class' => 'form-control', 'placeholder' => 'En Stock']) !!}
                                            </div>--}}

                                            <div class="form-group col-sm-12">
                                                {!! Form::label('active', 'Activo') !!}
                                                {!! Form::select('active', ['0' => 'No', '1' => 'Si'], 1, ['class' => 'form-control']) !!}
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
    @include('admin.partials.product-script')
    @include('admin.partials.error')
@stop
