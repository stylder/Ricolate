<script id="product-list-template" type="text/x-handlebars-template">
    {{#products}}

    <div class="list-product-description product-description-brd margin-bottom-30 producto">
        <div class="row">
            <div class="col-sm-4">
                <a href="/producto/{{product_id}}"><img class="img-responsive sm-margin-bottom-20"  src="{{cover_photo}}" alt=""></a>
            </div>
            <div class="col-sm-8 product-description">
                <div class="overflow-h margin-bottom-5">
                    <ul class="list-inline overflow-h">
                        <li><h4 class="title-price"><a href="/producto/{{product_id}}">{{name}}</a></h4></li>
                        <li><span class="gender text-uppercase">{{manufacturer.manufacturer}}</span></li>

                    </ul>
                    <p class="margin-bottom-20">{{short_desc}}</p>
                    <input type="hidden" name="id" value="{{product_id}}">
                    <form action="/cart/add/{{product_id}}" METHOD="post" class="producto-form">
                        <input type="hidden" name="id" value="{{product_id}}">
                        <input type="hidden" name="_token"  id="_token" value="<?php echo csrf_token();?>">
                        <button type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Agregar al Carro</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{/products}}


</script>


