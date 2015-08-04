<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesEducationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creatives_education', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->text('school');
			$table->string('degree',255);
			$table->string('major',255);
			$table->char('from_year',50);
			$table->char('to_year',50);
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
		Schema::drop('creatives_education');
	}

}
