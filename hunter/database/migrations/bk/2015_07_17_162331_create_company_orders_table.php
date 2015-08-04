<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_orders', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->integer('package_id')->unsigned()->index();
            $table->enum('status', ['Active', 'Inactive', 'Expired']);
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
		Schema::drop('company_orders');
	}

}
