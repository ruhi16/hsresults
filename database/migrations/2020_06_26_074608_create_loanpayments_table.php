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

            $table->float('previous_balance')->nullable();
            $table->float('loan_roi')->nullable();
            $table->float('loan_sch')->nullable();
            
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->integer('no_of_days')->nullable();
            
            $table->float('loan_int_amt')->nullable();
            $table->float('loan_sch_amt')->nullable();
            $table->float('premium_amt')->nullable();
            $table->float('total_amt')->nullable();

            $table->float('current_balance')->nullable();
            $table->date('loanpayment_date')->nullable();
            $table->String('status')->nullable();
            $table->String('remarks')->nullable();            
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
