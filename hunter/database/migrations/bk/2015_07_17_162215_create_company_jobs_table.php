<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_jobs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->integer('job_id')->unsigned()->index();
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
		Schema::drop('company_jobs');
	}

}
