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
            $table->string('loan_type');
            $table->decimal('yearly_rointerest');
            $table->decimal('yearly_roservice');
            $table->integer('term_inmonth');
            $table->decimal('loan_limit');
            $table->date('with_effect_from');
            $table->date('entry_date');
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
        Schema::dropIfExists('loanspecifications');
    }
}
