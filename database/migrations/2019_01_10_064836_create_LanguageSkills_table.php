<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LanguageSkills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('rate');
    
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
        Schema::dropIfExists('LanguageSkills');
    }
}
