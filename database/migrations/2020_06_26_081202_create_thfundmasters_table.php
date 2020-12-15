<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThfundmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thfundmasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            $table->decimal('op_balance');
            $table->date('op_balance_date');

            $table->integer('total_month');
            $table->decimal('total_collection');
            $table->decimal('total_interest');           
            
            $table->decimal('cl_balance');
            $table->date('cl_balance_date');   
            
            $table->string('status')->nullable;         
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
        Schema::dropIfExists('thfundmasters');
    }
}
