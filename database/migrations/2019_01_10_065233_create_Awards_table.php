<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Awards', function (Blueprint $table) {
            $table->increments('id');

        $table->string('title');
        $table->string('subject');

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
        Schema::dropIfExists('Awards');
    }
}
