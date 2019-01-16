<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Interviews', function (Blueprint $table) {
        $table->increments('id');
        $table->datetime('date');
        $table->string('place');
        $table->string('name');

        $table->integer('job_id')->unsigned();

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
        Schema::dropIfExists('Interviews');
    }
}
