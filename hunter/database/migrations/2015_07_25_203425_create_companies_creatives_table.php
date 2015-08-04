<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesCreativesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies_creatives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned()->index();
			$table->integer('apply_id')->unsigned()->index();
			$table->boolean('is_applicant');
			$table->boolean('is_stared');
			$table->dateTime('saved_date');
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
		Schema::drop('companies_creatives');
	}

}
