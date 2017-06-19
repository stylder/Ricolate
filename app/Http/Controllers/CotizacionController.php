<?php namespace fooCart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Exception;
use fooCart\Http\Requests;
use fooCart\Http\Controllers\Controller;
use fooCart\Http\Requests\SubmitOrderRequest;
use fooCart\src\Customer;
use fooCart\src\Order;
use fooCart\src\OrderProduct;



class CotizacionController extends Controller {

    protected $_request;
    protected $_order;


    public function __construct(Request $request, Order $order)
    {
        $this->_request = $request;
        $this->_order = $order;

    }


    /**
     * Submit the order
     * Save order details to DB
     * Charge the user's credit card
     *
     * @param SubmitOrderRequest $request
     * @return Response
     */
	public function store(Request $request)
	{
        $cart = App::make('fooCart\src\Cart\Interfaces\CartInterface', [$request]);
        $contents = $cart->getCartContents();

        try {
            //Start the transaction.
            $customer =  new Customer();
            //Create the new customer.
            $customer->nombre       = $request->input('nombre');
            $customer->apellidos    = $request->input('apellidos');
            $customer->correo       = $request->input('correo');
            $customer->telefono     = str_replace('-', '', $request->input('telefono'));

            $customer->calle        = $request->input('calle');
            $customer->numero       = $request->input('numero');
            $customer->colonia      = $request->input('colonia');
            $customer->municipio    = $request->input('municipio');
            $customer->estado       = $request->input('estado');
            $customer->postal       = $request->input('postal');

            $customer->compania     = $request->input('compania');
            $customer->rfc          = $request->input('rfc');

            $customer->notas        = $request->input('notas');


            $customer->save();

            $order =  new Order();
            //Create the new order.
            $order->customer_id     = $customer->customer_id;
            $order->order_total     = 0;
            $order->tax_total       = 0;
            $order->shipping_total  = 0;
            $order->status          = 'Quotation';
            $order->save();

            //Add each item from the cart to the order.
            foreach($contents['items'] as $key => $item)
            {
                $product = new OrderProduct;
                $product->order_id      = $order->order_id;
                $product->sku           = $item->sku;
                $product->manufacturer  = $item->manufacturer->manufacturer;
                $product->name          = $item->name;
                $product->price         = 0;
                $product->shipping      = 0;
                $product->tax           = 0;
                $product->quantity      = $contents['quantities'][$key];
                $product->save();
            }




            //Unset the cart cookie
            $cookie = Cookie::forget('cart');

            //Remove the total amount session var
            $request->session()->forget('cartTotal');

            //Finally, return the order confirmation view with the order list.
            $order = $this->_order->getOrder($order->order_id);
            //Return a JSON response if the form was submitted via AJAX.
            if($request->ajax())
            {
                return response()->json(['status' => 'success']);
            }

            //Return a redirect if the form was not submitted via AJAX.

            return redirect('/')->withCookie($cookie);

        } catch (Exception $e) {
            //Rollback the transaction if any part fails.

            //Return the user to the checkout form with a generic error.
            return redirect('/')
                ->withError('An error has occurred. Please try again later.'+ $e);
        }
	}
}
