<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesCoverlettersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creatives_coverletters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->string('name',255);
			$table->longText('detail');
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
		Schema::drop('creatives_coverletters');
	}

}
