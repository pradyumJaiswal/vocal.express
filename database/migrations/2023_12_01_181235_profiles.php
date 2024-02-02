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
       Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('Profile_Image')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('self_introduction')->nullable();
            $table->string('Hobbies')->nullable();
            $table->string('dream_place')->nullable();
            $table->string('book')->nullable();
            $table->string('occupation')->nullable();
            $table->string('home_town')->nullable();
            $table->string('school')->nullable();
            $table->unsignedBigInteger('Profile')->nullable();
            $table->foreign('Profile')->references('id')->on('users')->nullable();
            $table->rememberToken()->nullable();
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
        //
    }
};
