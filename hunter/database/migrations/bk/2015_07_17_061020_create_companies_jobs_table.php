<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index();
            $table->string('job_title',255);
            $table->text('creative_field');
            $table->text('location');
            $table->string('exp_date',255);
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->boolean('is_negotiable');
            $table->integer('job_level')->unsigned()->index();
            $table->integer('job_type')->unsigned()->index();
            $table->char('contact_gender',50);
            $table->string('contact_name',255);
            $table->string('apply_email',255);
            $table->longText('job_desc');
            $table->longText('apply_reason');
            $table->enum('status', ['Active', 'Inactive', 'Expired']);
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
        Schema::drop('companies_jobs');
    }
}
