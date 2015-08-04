<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creatives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('occupation',255);
            $table->integer('country_id')->unsigned()->index();
            $table->integer('city_id')->unsigned()->index();
            $table->string('birthdate',255);
            $table->char('phone',20);
            $table->longText('about_me',500);
            $table->integer('exp_years');
            $table->string('CV',255);
            $table->integer('available_art');
            $table->integer('limit_art');
            $table->text('skills');
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
        Schema::drop('creatives');
    }
}
