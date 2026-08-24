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
            $table->id();
            $table->string('link');
            $table->string('nome');
            $table->integer('sequencia');
            $table->text('descricao')->nullable();
            $table->integer('visualizacoes')->default(0);
            $table->foreignId('trilha_id')->constrained('trilhas');
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
