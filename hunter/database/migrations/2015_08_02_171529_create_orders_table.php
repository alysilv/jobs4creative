<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->integer('package_id')->unsigned()->index();
            $table->dateTime('order_date');
            $table->string('subtotal',255);
            $table->float('discount');
            $table->float('vat');
            $table->float('tax');
            $table->string('total_price',255);
            $table->char('payment_type',255);
            $table->char('coupon_code', 8);
            $table->integer('status_id')->unsigned()->index();
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
		Schema::drop('orders');
	}

}
