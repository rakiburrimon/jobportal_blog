<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekingInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobSeekingInterviews', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('jobseeker_id')->unsigned();
        $table->integer('interview_id')->unsigned();

        $table->foreign('jobseeker_id') -> references('id') -> on('JobSeekers');
        $table->foreign('interview_id') -> references('id') -> on('Interviews');
 
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
        Schema::dropIfExists('JobSeekingInterviews');
    }
}
