<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShfundmonthcollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shfundmonthcollections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            
            $table->float('share_amt');
            $table->date('share_collection_date');
            $table->integer('loanassign_id');

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
        Schema::dropIfExists('shfundmonthcollections');
    }
}
