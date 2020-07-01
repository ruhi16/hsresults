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
            $table->integer('loanspcification_id');
            $table->decimal('loan_amount');
            $table->String('loan_type');
            $table->decimal('loan_roi');
            $table->decimal('loan_sch');
            $table->integer('loan_term');
            $table->date('loan_date');
            $table->integer('loanreceivedfrbank_id')->nullable();

            $table->decimal('curr_bal');

            $table->integer('next_due_days');
            $table->integer('next_due_month');
            $table->integer('next_due_year');



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
