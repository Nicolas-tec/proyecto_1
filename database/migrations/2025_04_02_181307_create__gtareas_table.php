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
        Schema::create('Gtareas', function (Blueprint $table) {
            $table->id('id_tarea');
            $table->string('D_tarea');
            $table->string('Estatus');
            $table->string('F_publicasion');
            $table->string('Comentarios');
            $table->string('usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Gtareas');
    }
};
