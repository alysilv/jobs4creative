<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesArtsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('creative_arts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creative_id')->unsigned()->index();
			$table->string('work_title',255);
			$table->longText('work_description',1000);
			$table->string('end_client',255);
			$table->string('company',255);
			$table->string('your_role',255);
			$table->string('co-owner',255);
			$table->string('their_role',255);
			$table->string('upload_file',255);
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
		Schema::drop('creative_arts');
	}

}
