<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('VolunteerSkills', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('duration');
        $table->string('organization');

        $table->integer('jobseeker_id')->unsigned();
        
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
        Schema::dropIfExists('VolunteerSkills');
    }
}
