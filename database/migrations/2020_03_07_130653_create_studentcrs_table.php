<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentcrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('studentdb_id')->nullable();
            $table->integer('clss_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('roll_no')->nullable();
            $table->integer('session_id')->nullable();
            $table->string('result')->nullable();
            $table->integer('next_clss_id')->nullable();
            $table->integer('next_section_id')->nullable();
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
        Schema::dropIfExists('studentcrs');
    }
}
