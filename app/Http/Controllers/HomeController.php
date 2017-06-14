<?php namespace fooCart\Http\Controllers;

use Exception;
use fooCart\Http\Requests;
use fooCart\Http\Controllers\Controller;
use fooCart\src\Product;
use Illuminate\Http\Request;
use fooCart\src\Slideshow;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller {

    protected $_product;
    protected $_slideshow;

    public function __construct(Product $product, Slideshow $slideshow)
    {
        $this->_product = $product;
        $this->_slideshow = $slideshow;
    }

	/**
	 * Display the home page.
     * Send slideshow to home page.
     * Send on-sale list to home page
	 *
	 * @return Response
	 */

	public function index()
	{
        //Get the slideshow
        try {
            Cache::forget('slides');
            $slideshow =$this->_slideshow->getSlideshow(1);
        } catch(Exception $e)
        {
            $slideshow = null;
        }

        //Get the list of sale products
        try {
            Cache::forget('sale-products-home');
            $saleList = $this->_product->getHomePageSaleList();

        }catch(Exception $e)
        {
            $saleList = null;
        }

        return view('frontend.home')
            ->withSlides($slideshow)
            ->withSales($saleList);
	}
}
