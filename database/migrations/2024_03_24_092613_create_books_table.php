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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('auther');
            $table->string('description_text');
            $table->integer('price');
            $table->string('image');
            $table->boolean('isFree')->default(true);
            $table->foreignID('type_id')->constrained('learn_types');
            $table->foreignID('category_id')->constrained('categories');
            $table->foreignID('subcategory_id')->constrained('sub_categories');
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
        Schema::dropIfExists('books');
    }
};
