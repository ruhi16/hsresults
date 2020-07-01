<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanpayments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            $table->integer('loanassign_id');
            $table->String('loan_type');

            $table->decimal('previous_balance');
            $table->decimal('loan_roi');
            $table->decimal('loan_sch');
            
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('no_od_days');
            
            $table->decimal('loan_int_amt');
            $table->decimal('loan_sch_amt');

            $table->decimal('premium_amt');
            $table->decimal('total_amt');


            $table->decimal('current_balance');


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
        Schema::dropIfExists('loanpayments');
    }
}
