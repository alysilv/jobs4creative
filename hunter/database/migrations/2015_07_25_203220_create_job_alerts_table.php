<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobAlertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_alerts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->string('email',255);
			$table->enum('frequency',['Daily','Once per week','Once per month']);
			$table->string('creative_fields',255);
			$table->string('company_keywords',255);
			$table->string('location',255);
			$table->string('pre_lang',255);
			$table->integer('min_salary');
			$table->integer('max_salary');
			$table->integer('job_type_id')->unsigned()->index();
			$table->integer('job_level_id')->unsigned()->index();
			$table->boolean('is_active');
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
		Schema::drop('job_alerts');
	}

}
