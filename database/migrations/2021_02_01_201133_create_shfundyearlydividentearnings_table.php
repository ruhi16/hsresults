<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShfundyearlydividentearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shfundyearlydividentearnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('divident_amt');
            $table->date('divident_distribution_date');
            
            $table->boolean('is_audited')->nullable();
            $table->date('audited_date')->nullable();
            $table->string('audited_by')->nullable();

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
        Schema::dropIfExists('shfundyearlydividentearnings');
    }
}
