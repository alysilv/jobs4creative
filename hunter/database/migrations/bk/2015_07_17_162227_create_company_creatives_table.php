<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyCreativesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_creatives', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->integer('creative_id')->unsigned()->index();
            $table->enum('status', ['Saved', 'Resume']);
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
		Schema::drop('company_creatives');
	}

}
