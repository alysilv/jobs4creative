<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('fullname',255);
            $table->text('address');
            $table->char('contact_gender', 50);
            $table->string('contact_name',255);
            $table->integer('country_id')->unsigned()->index();
            $table->integer('city_id')->unsigned()->index();
            $table->string('profile_name',255);
            $table->char('phone',20);
            $table->string('fax',255);
            $table->char('fax_number',255);
            $table->integer('company_size');
            $table->longText('about_us', 5000);
            $table->longText('why_join_us', 10000);
            $table->text('website');
            $table->text('video_url');
            $table->text('logo');
            $table->integer('available_job');
            $table->integer('limit_job');
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
        Schema::drop('companies');
    }
}
