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
        Schema::create('usuarios_has_trilhas', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('usuarios_id');
            $table->foreign('usuarios_id')->references('id')->on('users');

            $table->unsignedInteger('trilhas_id');
            $table->foreign('trilhas_id')->references('id')->on('trilhas');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_has_trilhas');
    }
};
