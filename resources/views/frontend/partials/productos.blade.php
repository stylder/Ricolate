<section>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Cantidad</th>

            </tr>
            </thead>
            <tbody>

            @if(!is_null($contents))
                @foreach($contents as $key => $item)
                    <tr>
                        <td class="product-in-table">
                            <a  href="/products/{{ $item->product_id }}">
                                <img class="img-responsive" src="{{ (count($item->images)) ? $item->images->first()->image_path : 'http://placehold.it/221x221' }}" />
                            </a>
                            <div class="product-it-in">
                                <a  href="/producto/{{ $item->product_id }}">
                                <h3>{{ $item->name }}</h3>
                                    <div class="hidden-sm hidden-xs">
                                        <span>{{$item->short_desc}}</span>
                                    </div>

                                </a>
                            </div>
                        </td>
                        <td> {{ $item->manufacturer->manufacturer }} </td>
                        <td>
                            {!! Form::open(['method' => 'PUT', 'route' => ['cart.update', $item->product_id]]) !!}
                                <input name="newQuantity" type="number" min="0" class="quantity-field" value="{{ $quantities[$key] }}">
                                {!! Form::button('<i class="fa fa-refresh"></i>', ['class' => 'quantity-button', 'type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </td>

                        </td>
                        <td>
                            <a type="button" href="/cart/delete/{{ $item->product_id }}"  class="close">
                                <span>&times;</span><span class="sr-only">Cerrar</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">
                        <h1 class="text-center">El carro está vacio</h1>
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</section>