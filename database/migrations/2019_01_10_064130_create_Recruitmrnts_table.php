<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmrntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Recruitments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('jobseeker_id')->unsigned();
            $table->integer('job_id')->unsigned();

            $table->foreign('jobseeker_id') -> references('id') -> on('JobSeekers');
            $table->foreign('job_id') -> references('id') -> on('Jobs');

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
        Schema::dropIfExists('Recruitments');
    }
}
