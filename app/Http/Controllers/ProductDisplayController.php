<?php namespace fooCart\Http\Controllers;

use Exception;
use fooCart\Http\Requests;
use fooCart\Http\Controllers\Controller;
use fooCart\src\Product;
use Illuminate\Support\Facades\Cache;

class ProductDisplayController extends Controller {

    protected $_product;
    protected $_relatedProductCount;

    public function __construct(Product $product)
    {
        $this->_product = $product;
        $this->_relatedProductCount = 4;
    }

	/**
	 * Display the shop (product list) page.
	 *
	 * @return Response
	 */
	public function index()
	{
        //Set the page title
        $title = 'All Products';
        try {
            $products = Cache::rememberForever('all-products', function()
            {
                return $this->_product->getProductList();
            });
        } catch(Exception $e)
        {
            $products = null;
        }

        return view('public.product-list')
            ->withTitle($title)
            ->withProducts($products);
	}


    public function index2()
    {
        //Set the page title
        $title = 'Todos los productos';
        try {
            $products = Cache::rememberForever('all-products', function()
            {
                return $this->_product->getProductList();
            });
        } catch(Exception $e)
        {
            $products = null;
        }

        return view('frontend.product-list')
            ->withTitle($title)
            ->withProducts($products);
    }
    public function productosCategoria($categoria)
    {
        //Set the page title
        $title = 'Todos los productos';
        try {
            $products = Cache::rememberForever('all-products', function()
            {
                return $this->_product->getProductList();
            });

        } catch(Exception $e)
        {
            $products = null;
        }

        return view('frontend.product-list')
            ->withTitle($title)
            ->withProducts($products)
            ->withCategoria($categoria);
    }

    /**
     * Display the product detail page.
     * Send list of related products to page.
     *
     * @param $product_id
     * @return Response
     * @internal param int $id
     */
	public function show($product_id)
	{
        try {
            $product = $this->_product->getProduct($product_id);
            $related = $this->_product->getRelatedProducts($product->category_id, $this->_relatedProductCount);
        } catch(Exception $e)
        {
            return redirect('/shop');
        }

        return view('public.product-detail')
            ->withProduct($product)
            ->withPrice($product->getFinalPrice())
            ->withRelated($related);
	}

    public function show2($product_id)
    {
        try {
            $product = $this->_product->getProduct($product_id);
            $related = $this->_product->getRelatedProducts($product->category_id, $this->_relatedProductCount);
        } catch(Exception $e)
        {
            return redirect('/shop');
        }

        return view('frontend.product-detail')
            ->withProduct($product)
            ->withPrice($product->getFinalPrice())
            ->withRelated($related);
    }
}