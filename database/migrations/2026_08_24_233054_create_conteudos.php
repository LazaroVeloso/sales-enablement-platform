<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('nome');
            $table->integer('sequencia');
            $table->text('descricao')->nullable();
            $table->integer('visualizacoes')->default(0);
            $table->unsignedInteger('trilhas_id');
            $table->foreign('trilhas_id')->references('id')->on('trilhas')->onDelete('cascade');
            $table->string('formato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conteudos');
    }
};

