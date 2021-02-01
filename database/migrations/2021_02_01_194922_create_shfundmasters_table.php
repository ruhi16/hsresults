<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShfundmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shfundmasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            $table->float('op_balance')->nullable();
            $table->date('op_balance_date')->nullable();            
            
            $table->float('cl_balance')->nullable();
            $table->date('cl_balance_date')->nullable();   
            
            $table->integer('finyear_id');
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
        Schema::dropIfExists('shfundmasters');
    }
}
