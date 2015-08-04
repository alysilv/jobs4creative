<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('nb_job_posts');
            $table->boolean('is_highlight');
            $table->boolean('is_feature');
            $table->boolean('is_searchable');
            $table->string('price',255);
            $table->string('price_unit', 255);
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
		Schema::drop('packages');
	}

}
