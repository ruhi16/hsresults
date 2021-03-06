<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThfundspecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thfundspecifications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->float('monthly_premium')->nullable();
            $table->float('yearly_roi')->nullable();         

            $table->datetime('date_of_activation')->nullable();
            
            $table->string('status')->nullable();
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
        Schema::dropIfExists('thfundspecifications');
    }
}
