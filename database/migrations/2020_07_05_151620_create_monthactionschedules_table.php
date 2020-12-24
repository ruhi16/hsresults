<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthactionschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthactionschedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('monthaction_id')->nullable();
            $table->string('monthaction_status')->nullable();
            $table->integer('for_month')->nullable();
            $table->integer('for_year')->nullable();
            $table->string('status')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('monthactionschedules');
    }
}
