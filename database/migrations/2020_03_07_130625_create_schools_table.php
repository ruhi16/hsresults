<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('estd')->nullable();
            $table->string('dise')->nullable();
            $table->string('village')->nullable();
            $table->string('post')->nullable();
            $table->string('police_stn')->nullable();
            $table->string('district')->nullable();
            $table->string('pin_no')->nullable();
            $table->string('status')->nullable();
            $table->integer('prev_session_pk')->nullable();
            $table->integer('next_session_pk')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
