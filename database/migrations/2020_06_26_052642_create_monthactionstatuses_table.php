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
            $table->integer('monthaction_id');
            $table->String('action_status');//due,done,finalize
            $table->date('action_date');
            $table->String('approval_status');
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
