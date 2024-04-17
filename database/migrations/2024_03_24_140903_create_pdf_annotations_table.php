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
        Schema::create('pdf_annotations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pdf_document_id');
            $table->foreign('pdf_document_id')->references('id')->on('pdf_documents')->onDelete('cascade');
            $table->string('topic');
            $table->text('highlighted_text');
            $table->text('note');
            $table->integer('page_number');
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
        Schema::dropIfExists('pdf_annotations');
    }
};
