<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesAchievementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creatives_achievements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->text('title');
			$table->string('creative_field',255);
			$table->string('date',255);
			$table->longText('description');
			$table->text('website');
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
		Schema::drop('creatives_achievements');
	}

}
