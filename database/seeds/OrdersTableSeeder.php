<?php

use Illuminate\Database\Seeder;
use fooCart\src\Order;

class OrdersTableSeeder extends Seeder {

    public function run()
    {
        Order::create(array(
            'order_id'                  => 1,
            'customer_id'               => 1,
            'order_total'               => 987.65,
            'tax_total'                 => 21.22,
            'shipping_total'            => 12.21,
            'status'                    => 'Quotation'
        ));

    }
}