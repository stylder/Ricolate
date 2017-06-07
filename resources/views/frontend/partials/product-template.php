<script id="product-list-template" type="text/x-handlebars-template">
    {{#products}}

    <div class="list-product-description product-description-brd margin-bottom-30">
        <div class="row">
            <div class="col-sm-4">
                <a href="shop-ui-inner.html"><img class="img-responsive sm-margin-bottom-20"  src="{{cover_photo}}" alt=""></a>
            </div>
            <div class="col-sm-8 product-description">
                <div class="overflow-h margin-bottom-5">
                    <ul class="list-inline overflow-h">
                        <li><h4 class="title-price"><a href="shop-ui-inner.html">{{name}}</a></h4></li>
                        <li><span class="gender text-uppercase">{{manufacturer.manufacturer}}</span></li>
                       
                    </ul>
                    <div class="margin-bottom-10">
                        <span class="title-price margin-right-10">${{price}}</span>
                        <span class="title-price line-through">${{sale_price}}</span>
                    </div>
                    <p class="margin-bottom-20">{{short_desc}}</p>

                    <button type="button" class="btn-u btn-u-sea-shop">Agregar al carro</button>
                </div>
            </div>
        </div>
    </div>
    {{/products}}
</script>