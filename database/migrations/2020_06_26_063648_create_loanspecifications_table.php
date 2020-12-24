<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanspecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanspecifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('loan_type')->nullable();
            $table->float('yearly_rointerest')->nullable();
            $table->float('yearly_roservice')->nullable();
            $table->integer('term_inmonth')->nullable();
            $table->float('loan_limit')->nullable();
            $table->date('with_effect_from')->nullable();
            $table->date('entry_date')->nullable();
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
        Schema::dropIfExists('loanspecifications');
    }
}
