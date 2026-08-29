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
        //
        Schema::create('trilhas', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('titulo');
            $table->text('description');
            $table->datetime('data_inicio')->nullable();
            $table->datetime('data_fim')->nullable();
            $table->boolean('ativo')->default(true);
            $table->unsignedInteger('responsavel_id');
            $table->foreign('responsavel_id')->references('id')->on('users');
            $table->timestamps();
        });
    }
/**
 * 
 * $table->foreign('categoria_id')
          ->references('id')
          ->on('categorias')
          ->onDelete('cascade');
   unsignedInteger('nome_id')
 */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('trilhas');
    }
};
