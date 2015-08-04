<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesArtHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creatives_art_histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('art_id')->unsigned()->index();
			$table->integer('creative_id')->unsigned()->index();
			$table->string('action',255);
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
		Schema::drop('creatives_art_histories');
	}

}
