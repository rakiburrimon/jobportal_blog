<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobReviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity');

        $table->integer('interview_id')->unsigned();
        $table->integer('jobseeker_id')->unsigned();
        
        $table->foreign('interview_id') -> references('id') -> on('Interviews');
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
        Schema::dropIfExists('JobReviews');
    }
}
