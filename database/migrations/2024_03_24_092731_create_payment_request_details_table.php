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
        Schema::create('payment_request_details', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('description');
            $table->foreignID('user_id')->constrained('users');
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
        Schema::dropIfExists('payment_request_details');
    }
};
