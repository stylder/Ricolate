<section>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Qty</th>

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
                                <span>Descripción</span>
                                </a>
                            </div>
                        </td>
                        <td> {{ $item->manufacturer->manufacturer }} </td>
                        <td>
                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty1();' value='-'>-</button>
                            <input type='text' class="quantity-field" name='qty1' value="{{ $quantities[$key] }}" id='qty1'/>
                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'>+</button>
                        </td>

                        </td>
                        <td>
                            <button type="button" href="/cart/delete/{{ $item->product_id }}"  class="close"><span>&times;</span><span class="sr-only">Close</span></button>
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