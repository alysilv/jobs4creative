<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesJobExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creatives_job_experiences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->text('company');
			$table->text('website');
			$table->text('job_title');
			$table->integer('country_id')->unsigned()->index();
			$table->integer('city_id')->unsigned()->index();
			$table->char('from_year',50);
			$table->char('to_year',50);
			$table->longText('description');
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
		Schema::drop('creatives_job_experiences');
	}

}
