<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('Jobs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('vacancy');
        $table->string('location');
        $table->string('category');
        $table->string('nature');
        $table->string('level');
        $table->string('age_range');

        $table->string('context');
        $table->string('responsibilities');
        $table->string('education');
        $table->string('experience');
        
        $table->string('salary');
        $table->string('deadline');

        $table->string('status');
        $table->string('type');

        $table->integer('employer_id')->unsigned();

        $table->foreign('employer_id') -> references('id') -> on('Employers');
 
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
        Schema::dropIfExists('Jobs');
    }
}
