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
            $table->string('Profile_Image');
            $table->date('dob');
            $table->string('gender');
            $table->string('self_introduction');
            $table->string('Hobbies');
            $table->string('dream_place');
            $table->string('book');
            $table->string('occupation');
            $table->string('home_town');
            $table->string('school');
            $table->unsignedBigInteger('Profile');
            $table->foreign('Profile')->references('id')->on('users');
            $table->rememberToken();
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
