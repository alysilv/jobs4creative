<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesSoftwareSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creatives_software_skills', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->integer('software_id')->unsigned()->index();
			$table->enum('rate', ['1','2','3','4','5']);
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
		Schema::drop('creatives_software_skills');
	}

}
