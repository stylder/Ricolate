<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_customers', function(Blueprint $table)
		{
            $table->increments('customer_id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo');
            $table->bigInteger('telefono');
            $table->string('calle');
            $table->string('numero')->nullable();
            $table->string('colonia');
            $table->string('municipio');
            $table->string('estado');
            $table->integer('postal');

            $table->string('compania')->nullable();
            $table->string('rfc')->nullable();


            $table->string('notas')->nullable();

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
