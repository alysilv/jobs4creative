<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobApplicantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_applicants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->integer('job_id')->unsigned()->index();
			$table->text('resume_url');
			$table->string('fullname',255);
			$table->string('attached_CV', 255);
			$table->string('sample_work_1_url', 255);
			$table->string('sample_work_2_url', 255);
			$table->string('sample_work_3_url', 255);
			$table->longText('coverletter');
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
		Schema::drop('job_applicants');
	}

}
