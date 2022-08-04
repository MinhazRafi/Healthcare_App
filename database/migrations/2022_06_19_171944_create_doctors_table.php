<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
        /*    $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->string('bg');
            $table->string('phone');

            //$table->timestamps();
        */
            $table->id();    
            $table->string('doctor_name');
            $table->string('doctor_email')->unique();
            $table->string('doctor_password');
            $table->string('doctor_gender');
            $table->string('doctor_bg'); 
            $table->string('doctor_phone');
            $table->string('doctor_specialized');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
