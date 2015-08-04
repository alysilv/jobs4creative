<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddOnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('add_ons', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('name');
            $table->string('price',255);
            $table->string('price_unit',255);
            $table->string('image',255);
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
		Schema::drop('add_ons');
	}

}
