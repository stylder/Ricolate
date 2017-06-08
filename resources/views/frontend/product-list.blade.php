@extends('frontend.layouts.main')

@section('title')
    @parent {{ $title or 'Productos' }}
@stop

@section('content')

    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Productos</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="/">Home</a></li>
                <li class="active">Productos</li>
            </ul>
        </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v4 ===-->

    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <br><br>
            <form role="search" action="/search" method="GET">
                <div class="input-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="form-control" placeholder="Buscar productos ...">
                    <span class="input-group-btn">
							<button class="btn-u" type="button"><i class="fa fa-search"></i></button>
						</span>
                </div>
            </form>
        </div>
    </div>

    <!--=== Content Part ===-->
    <div class="content container">
        <div class="row">
            <div class="col-md-3 filter-by-block md-margin-bottom-60">
                <h1>Filtrar por</h1>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Categoría {{ ! empty($categoria) }}

                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <form action="">
                                    <ul class="list-unstyled checkbox-list" id="categoryFilter" role="menu"
                                        aria-labelledby="filter-category"></ul>
                                </form>

                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
                                    Fabricante
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">

                                <form action="">
                                    <ul id="manufacturerFilter" class="list-unstyled checkbox-list" role="menu"
                                        aria-labelledby="filter-manufacturer"></ul>
                                </form>

                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

            </div>

            <div class="col-md-9">
                <div class="row margin-bottom-5">
                    <div class="col-sm-4 result-category">
                        <h2>{{count($products)}} Productos</h2>
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-inline clear-both">
                            <li class="grid-list-icons">
                                <a href="shop-ui-filter-list.html"><i class="fa fa-th-list"></i></a>
                                <a href="shop-ui-filter-grid.html"><i class="fa fa-th"></i></a>
                            </li>

                            <li class="sort-list-btn">
                                <div class="dropdown  filter-right "><h3>Mostrar :</h3>
                                    <button class="btn btn-default dropdown-toggle btn-prod-count" type="button"
                                            id="sort-by" data-toggle="dropdown" aria-expanded="true">
                                        <span class="results-count-dropdown">10</span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu filter-menu-right ul-prod-count" role="menu"
                                        aria-labelledby="sort-by">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">25</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--/end result category-->

                <div class="filter-results">
                    <div id="product-content">

                        {{--<div class="list-product-description product-description-brd margin-bottom-30">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="shop-ui-inner.html"><img class="img-responsive sm-margin-bottom-20"
                                                                      src="assets/img/blog/17.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-8 product-description">
                                    <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h">
                                            <li><h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a>
                                                </h4></li>
                                            <li><span class="gender text-uppercase">Men</span></li>
                                            <li class="pull-right">
                                                <ul class="list-inline product-ratings">
                                                    <li><i class="rating-selected fa fa-star"></i></li>
                                                    <li><i class="rating-selected fa fa-star"></i></li>
                                                    <li><i class="rating-selected fa fa-star"></i></li>
                                                    <li><i class="rating fa fa-star"></i></li>
                                                    <li><i class="rating fa fa-star"></i></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="margin-bottom-10">
                                            <span class="title-price margin-right-10">$60.00</span>
                                            <span class="title-price line-through">$95.00</span>
                                        </div>
                                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Maecenas sollicitudin erat nec ornarevolu tpat. Etiam ut felis nec
                                            nisl eleifend lobortis. Aenean nibh est, hendrerit non conva.</p>
                                        <ul class="list-inline add-to-wishlist margin-bottom-20">
                                            <li class="wishlist-in">
                                                <i class="fa fa-heart"></i>
                                                <a href="#">Add to Wishlist</a>
                                            </li>
                                            <li class="compare-in">
                                                <i class="fa fa-exchange"></i>
                                                <a href="#">Add to Compare</a>
                                            </li>
                                        </ul>
                                        <button type="button" class="btn-u btn-u-sea-shop">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </div><!--/end filter resilts-->

                    <div class="text-center">
                        <ul class="shop-pagination pagination  pagination-v2 pagination-md">
                            <li>
                                <a class="prev" aria-label="Previous" href="#">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="pag-last">
                                <a class="next" aria-label="Next" href="#">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </div><!--/end pagination-->
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
        <!--=== End Content Part ===-->
    </div>

@stop
@section('scripts')
    @include('frontend.partials.product-template')
    <script>
        var productList = window.productList || {};

        //Pagination
        productList.pagination = window.productList.pagination || {};
        //Create pages array
        productList.pagination.pages = new Array();
        //Set product per page default at 10
        productList.pagination.prodPerPage = 10;
        //Set the current page
        productList.pagination.currentPage = 1;

        /**
         * Apply the product-per page filter.
         * Re-render the page.
         */
        productList.pagination.setProdPerPage = function () {
            $('ul.ul-prod-count li a').click(function () {
                var count = $(this).text();
                if (count != productList.pagination.prodPerPage) {
                    productList.pagination.currentPage = 1;
                    productList.pagination.prodPerPage = count;
                    productList.pagination.setPages();
                    $('button.btn-prod-count').find('span.results-count-dropdown').text(count);
                    productList.pagination.getPageCount();
                    productList.pagination.setPageLinks();
                    productList.renderPage();
                    productList.pagination.pageByNumber();
                }
            });
        };

        /**
         * Handle pagination.
         */
        productList.pagination.pageByNumber = function () {
            $('ul.shop-pagination li').each(function () {
                $(this).on('click', 'a', function () {
                    var page = $(this).text();
                    var parent = $(this).parent('li');
                    if (!parent.hasClass("active") && !isNaN(page)) {
                        productList.pagination.currentPage = page;
                        productList.renderPage();
                        productList.pagination.setActivePage();
                    }
                });
            });
        };

        /**
         * Highlight the page link for the active page
         */
        productList.pagination.setActivePage = function () {
            $('ul.shop-pagination li').each(function () {
                if ($(this).find('a').text() == productList.pagination.currentPage) {
                    $(this).addClass("active");
                } else {
                    $(this).removeClass("active");
                }
            });
        };

        /**
         * Handle forward (next) pagination navigation
         */
        productList.pagination.pageForward = function () {
            if (productList.pagination.pageCount > productList.pagination.currentPage) {
                productList.pagination.currentPage++;
                productList.renderPage();
                productList.pagination.setActivePage();
            }
        };

        /**
         * Handle backward (previous) pagination navigation
         */
        productList.pagination.pageBack = function () {
            if (productList.pagination.currentPage > 1) {
                productList.pagination.currentPage--;
                productList.renderPage();
                productList.pagination.setActivePage();
            }
        };

        /**
         * Handle click event for next page button
         */
        $('ul.shop-pagination').on('click', 'a.next', function () {
            productList.pagination.pageForward();
        });

        /**
         * Handle click event for previous page button
         */
        $('ul.shop-pagination').on('click', 'a.prev', function () {
            productList.pagination.pageBack();
        });

        /**
         * Set the pagination links when the page is rendered/re-rendered.
         */
        productList.pagination.setPageLinks = function () {
            $('li.pagiNav').remove();
            var navEnd = $('li.pag-last');
            for (var p = 0; p < productList.pagination.pageCount; p++) {
                var pagiNavClass = 'pagiNav';
                if (productList.pagination.currentPage == (p + 1)) {
                    pagiNavClass += ' active';
                }
                var pagiHtml = '<li class="' + pagiNavClass + '"><a href="#">' + (p + 1) + '</a></li>';
                navEnd.before(pagiHtml);
            }
        };

        /**
         * Get the page count based on total products / products per page.
         */
        productList.pagination.getPageCount = function () {
            var totModPages = (productList.getProductCount() % productList.pagination.prodPerPage);
            productList.pagination.pageCount = (totModPages > 0) ? (Math.floor(productList.getProductCount() / productList.pagination.prodPerPage) + 1) : Math.floor(productList.getProductCount() / productList.pagination.prodPerPage);
        };

        /**
         * Create the individual "pages" (assuming product count > product per page).
         */
        productList.pagination.setPages = function () {
            //Determine which list to use (full or filtered)
            var f = productList.filters.checkFilters();
            var d = f ? productList.filters.filteredList : productList.Json;
            var counter = 0;
            var page = 0;
            productList.pagination.getPageCount();
            //Create new pages
            for (var i = 0; i <= productList.pagination.pageCount; i++) {
                productList.pagination.pages[i] = new Array();
            }

            //Add products to pages
            for (var i = 0; i < productList.getProductCount(); i++) {
                if (counter < productList.pagination.prodPerPage) {
                    productList.pagination.pages[page].push(d[i]);
                    counter++;
                } else if (counter >= productList.pagination.prodPerPage) {
                    counter = 0;
                    page++;
                    productList.pagination.pages[page].push(d[i]);
                    counter++;
                }
            }
        };

        //Define the product container element
        productList.container = $('#product-content');
        //Create product list object
        productList.Json = {!! $products !!};


        /**
         * Handle the rendering of the page.
         */
        productList.renderPage = function () {
            //Set the page to 0 since it is currently set to the human readable integer 1.
            var page = productList.pagination.currentPage - 1;
            //Assign the first image in the array as the product image.
            //If no images exist for product, then assign placeholder image as primary image.
            for (var p in productList.pagination.pages[page]) {
                var img = productList.pagination.pages[page][p].images;
                if (img[0] !== undefined) {
                    productList.pagination.pages[page][p].cover_photo = img[0]['image_path'];
                } else {
                    productList.pagination.pages[page][p].cover_photo = 'http://placehold.it/221x221';
                }
            }
            //Render the product list
            var view = $("#product-list-template").html();
            var template = Handlebars.compile(view);
            var json = {
                products: productList.pagination.pages[page]
            };

            var html = template(json);
            productList.container.empty();
            productList.container.append(html);
        };

        //Filters
        productList.filters = window.productList.filters || {}
        //Create the manufacturer array
        productList.filters.manufacturers = new Array();
        //Create the categories array
        productList.filters.categories = new Array();
        //Default the category filter to all categories
        productList.filters.catFilter = 'Categoría (Todas)';
        //Default the manufacturer filter to all manufacturers
        productList.filters.manFilter = 'Fabricantes (Todos)';

        /**
         * Check if there are any active filters.
         *
         * @returns {boolean}
         */
        productList.filters.checkFilters = function () {
            if (productList.filters.catFilter !== 'Categoría (Todas)' || productList.filters.manFilter !== 'Fabricantes (Todos)') {
                return true;
            }
            return false;
        };

        /**
         * Apply the selected filter(s).
         */
        productList.filters.applyFilters = function () {
            //Create the filterdProducts array
            productList.filters.filteredList = new Array();
            for (var p in productList.Json) {
                productList.filters.filteredList.push(productList.Json[p]);
            }
            //Filter out categories
            if (productList.filters.catFilter !== 'Categoría (Todas)') {
                //for(var f in productList.filters.filteredList)
                for (var i = productList.filters.filteredList.length; i--;) {
                    if (productList.filters.filteredList[i].category.category != productList.filters.catFilter) {
                        productList.filters.filteredList.splice(i, 1);
                    }
                }
            }

            /**
             * Handle filter by manufacturer.
             */
            if (productList.filters.manFilter !== 'Fabricantes (Todos)') {
                for (var i = productList.filters.filteredList.length; i--;) {
                    if (productList.filters.filteredList[i].manufacturer.manufacturer != productList.filters.manFilter) {
                        productList.filters.filteredList.splice(i, 1);
                    }
                }
            }
            productList.pagination.setPages();
            productList.pagination.getPageCount();
            productList.pagination.setPageLinks();
            productList.renderPage();
            productList.pagination.pageByNumber();
            productList.pagination.currentPage = 1;
            productList.renderPage();
            productList.pagination.setActivePage()
        };

        /**
         * Handle category filter changes.
         */
        $('ul#categoryFilter').on('click', 'label', function () {
            var cat = $(this).text();
            $('span.filter-category-label').text(cat);
            productList.filters.catFilter = cat;
            productList.filters.applyFilters();
        });

        /**
         * Handle manufacturer filter changes.
         */
        $('ul#manufacturerFilter').on('click', 'label', function () {
            var man = $(this).text();
            $('span.filter-manufacturer-label').text(man);
            productList.filters.manFilter = man;
            productList.filters.applyFilters();
        });

        /**
         * Create a list of all manufacturers.
         */
        productList.filters.getManufacturers = function () {
            var f = productList.filters.checkFilters();
            var d = f ? productList.filters.filteredList : productList.Json;
            for (var p in d) {
                var m = d[p].manufacturer.manufacturer;
                if (productList.filters.manufacturers.indexOf(m) === -1) {
                    productList.filters.manufacturers.push(m);
                }
            }
        };

        /**
         * Populate the manufacturer filter dropdown.
         */
        productList.filters.genManufacturerFilter = function () {
            var todosManufecters =
                '<li role="presentation"><label class="checkbox"><input type="radio" name="checkbox" checked/><i></i>' +
                '<a role="menuitem" tabindex="-1">Fabricantes (Todos)</a></label></li>';

            $('ul#manufacturerFilter').append(todosManufecters);
            for (var m in productList.filters.manufacturers) {
                var li =
                    '<li role="presentation"><label class="checkbox"><input type="radio" name="checkbox"/><i></i>' +
                    '<a role="menuitem" tabindex="-1">'
                    + productList.filters.manufacturers[m] +
                    '</a></label></li>';
                $('ul#manufacturerFilter').append(li);
            }
        };

        /**
         * Create a list of all categories.
         */
        productList.filters.getCategories = function () {
            var f = productList.filters.checkFilters();
            var d = f ? productList.filters.filteredList : productList.Json;

            for (var c in d) {

                var c = d[c].category.category;
                if (productList.filters.categories.indexOf(c) === -1) {
                    productList.filters.categories.push(c);
                }
            }
        };

        /**
         * Populate the category list dropdown.
         */
        productList.filters.genCategoryFilter = function () {

            var todosCategory =
                '<li role="presentation"><label class="checkbox"><input type="radio" name="checkbox" checked/><i></i>' +
                '<a role="menuitem" tabindex="-1">Categoría (Todas)</a></label></li>';

            $('ul#categoryFilter').append(todosCategory);
            for (var c in productList.filters.categories) {
                var li =
                    '<li role="presentation"><label class="checkbox"><input type="radio" name="checkbox"/><i></i>' +
                    '<a role="menuitem" tabindex="-1">'
                    + productList.filters.categories[c] +
                    '</a></label></li>';
                $('ul#categoryFilter').append(li);
            }
        };

        /**
         * Get the total product count.
         *
         * @returns {number}
         */
        productList.getProductCount = function () {
            var d = productList.filters.checkFilters() ? productList.filters.filteredList : productList.Json;
            var i = 0;
            for (var p in d) {
                if (d.hasOwnProperty(p)) {
                    i++;
                }
            }
            return i;
        };

        productList.init = function () {
            //INITIALIZATION METHOD CALLS
            productList.pagination.setPages();
            productList.filters.getManufacturers();
            productList.filters.genManufacturerFilter();
            productList.filters.getCategories();
            productList.filters.genCategoryFilter();
            productList.renderPage();
            productList.pagination.setPageLinks();
            productList.pagination.setActivePage();
            productList.pagination.pageByNumber();
            productList.pagination.setProdPerPage();
        };

        /**
         * Initialize the product list methods.
         */
        productList.init();

    </script>
@stop