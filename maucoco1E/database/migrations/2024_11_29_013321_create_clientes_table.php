<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Columna para el nombre del cliente
            $table->string('email')->unique(); // Columna para el email
            $table->timestamps(); // Columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }

    /**
     * Reverse the migrations.
     */
};
