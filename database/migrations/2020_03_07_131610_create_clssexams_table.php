<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClssexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clssexams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clss_id');
            $table->integer('exam_id');
            
            $table->string('status')->nullable();
            $table->integer('session_id')->nullable();
            $table->integer('prev_session_pk')->nullable();
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
        Schema::dropIfExists('clssexams');
    }
}
