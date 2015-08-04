<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->string('job_title',255);
            $table->text('creative_field');
            $table->text('location');
            $table->string('exp_date',255);
            $table->string('pre_lang',255);
            $table->string('res_lang',255);
            $table->integer('salary_from');
            $table->integer('salary_to');
            $table->enum('salary', ['remember', 'negotiate']);
            $table->char('contact_gender',50);
            $table->string('contact_name',255);
            $table->string('apply_email',255);
            $table->longText('job_desc');
            $table->longText('apply_reason');
            $table->integer('status_id')->unsigned()->index();
            $table->integer('like_stats');
            $table->integer('view_stats');
            $table->boolean('is_hot');
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
        Schema::drop('jobs');
    }
}
