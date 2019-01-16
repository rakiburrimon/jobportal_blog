<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JobSeekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',60)->unique();
            $table->string('contact')->nullable();


            $table->string('present_address')->nullable();
            $table->string('parmanent_address')->nullable();
            $table->datetime('DOB')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();


            $table->string('career_objective')->nullable();
            $table->string('job_profile')->nullable();
            $table->string('image')->nullable();
            $table->string('status');
            $table->string('type');
            $table->string('password');

            $table->string('custom_cv')->nullable();

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
        Schema::dropIfExists('JobSeekers');
    }
}
