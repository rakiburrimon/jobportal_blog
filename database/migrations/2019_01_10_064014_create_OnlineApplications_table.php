<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OnlineApplications', function (Blueprint $table) {
        $table->increments('id');
        $table->datetime('applied_date');
        $table->string('expected_salary');

        $table->integer('job_id')->unsigned();
        $table->integer('jobseeker_id')->unsigned();

        $table->foreign('job_id') -> references('id') -> on('Jobs');
        $table->foreign('jobseeker_id') -> references('id') -> on('JobSeekers');
 
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
        Schema::dropIfExists('OnlineApplications');
    }
}
