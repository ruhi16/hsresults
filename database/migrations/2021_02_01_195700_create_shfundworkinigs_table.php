<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShfundworkinigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shfundworkinigs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            
            $table->float('share_amt');
            $table->integer('working_no_of_months');
            $table->float('working_total_amt');
            
            $table->float('divident_earning');
            $table->boolean('divident_is_paid');
            $table->date('divident_pay_date');

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
        Schema::dropIfExists('shfundworkinigs');
    }
}
