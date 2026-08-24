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
            $table->id();
            $table->string('titulo');
            $table->text('description');
            $table->datetime('data_inicio')->nullable();
            $table->datetime('data_fim')->nullable();
            $table->boolean('ativo')->default(true);
            $table->foreignId('responsavel_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('trilhas');
    }
};
