<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthactionstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthactionstatuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('monthaction_id')->nullable();
            $table->String('action_status')->nullable();//due,done,finalize
            $table->date('action_date')->nullable();
            $table->String('approval_status')->nullable();
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
        Schema::dropIfExists('monthactionstatuses');
    }
}
