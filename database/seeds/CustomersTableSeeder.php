<?php

use Illuminate\Database\Seeder;
use fooCart\src\Customer;

class CustomersTableSeeder extends Seeder {

    public function run()
    {
        Customer::create(array(
            'customer_id'    =>  1,
            'nombre'        =>  'Santiago',
            'apellidos'     =>  'García Cabral',
            'correo'        =>  'stylder@gmai.com',
            'calle'         =>  'Aguascalientes',
            'numero'        =>  '100',
            'colonia'       =>  'San Isidro',
            'municipio'     =>  'Jerez',
            'estado'        =>  'Zacatecas',

            'postal'        =>  98686,
            'telefono'      =>  1234567890,

            'compania'      =>  'Ricolate',
            'rfc'           =>  'DKDJ30DS0',
            'notas'         =>  'La quiero rápida',
        ));
    }
}