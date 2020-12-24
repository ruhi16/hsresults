<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanassignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanassigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            $table->integer('loanspecification_id')->nullable();
            
            $table->String('loan_type')->nullable();
            
            $table->double('loan_amount')->nullable();            
            $table->date('loan_date')->nullable();

            $table->double('loan_roi')->nullable();
            $table->double('loan_sch')->nullable();
            $table->integer('loan_term')->nullable();
            
            $table->integer('coopbankloancollection_id')->nullable();

            $table->double('curr_bal')->nullable();

            $table->integer('next_due_days')->nullable();
            $table->integer('next_due_month')->nullable();
            $table->integer('next_due_year')->nullable();



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
        Schema::dropIfExists('loanassigns');
    }
}
