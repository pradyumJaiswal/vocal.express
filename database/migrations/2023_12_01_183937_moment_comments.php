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
        Schema::create('momentComments', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('likes');
             $table->string('voice');
            $table->unsignedBigInteger('Moment');
            $table->foreign('Moment')->references('id')->on('moments');
            $table->unsignedBigInteger('User');
            $table->foreign('User')->references('id')->on('users');
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
