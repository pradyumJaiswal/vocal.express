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
        Schema::create('inventries', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->foreignID('type_id')->constrained('learn_types');
            $table->foreignID('book_id')->constrained('books');
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
        Schema::dropIfExists('inventries');
    }
};
