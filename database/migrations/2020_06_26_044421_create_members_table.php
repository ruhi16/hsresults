<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('designation')->nullable();            
            $table->string('aadhaar_no')->nullable();            
            $table->string('membership_no')->nullable();
            $table->date('membership_date')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('bank')->nullable();
            $table->string('branch')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('micr')->nullable();
            $table->string('account_no')->nullable();
            $table->integer('society_id')->nullable();
            $table->string('security_pin')->nullable();
            $table->boolean('is_loan_issued')->nullable();
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('members');
    }
}
