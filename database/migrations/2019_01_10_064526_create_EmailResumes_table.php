<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmailResumes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('to');
        $table->string('subject');
        $table->string('body');
        $table->string('cv_type');

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
        Schema::dropIfExists('EmailResumes');
    }
}
