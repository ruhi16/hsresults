<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adm_sl')->nullable();
            $table->date('adm_dt')->nullable();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('nationality')->nullable();
            $table->date('dob')->nullable();
            $table->string('ph_challenged')->nullable();
            $table->string('regno')->nullable();
            $table->string('vill')->nullable();
            $table->string('post')->nullable();
            $table->string('pstn')->nullable();
            $table->string('dist')->nullable();
            $table->string('pin')->nullable()->nullable();
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('ac_no')->nullable();
            $table->string('status')->nullable();
            $table->integer('session_id')->nullable();
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
        Schema::dropIfExists('studentdbs');
    }
}
