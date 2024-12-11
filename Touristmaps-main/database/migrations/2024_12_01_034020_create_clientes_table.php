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
        // Tabla usuarios
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->string('telefono', 20);
            $table->string('correo', 255)->unique();
            $table->string('contrasena', 255);
            $table->enum('role', ['usuario', 'administrador'])->default('usuario'); // Rol del usuario
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamps();
        });

        // Tabla destinos
        Schema::create('destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('descripcion');
            $table->timestamps();
        });

        // Tabla tipo_vuelo
        Schema::create('tipo_vuelo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->timestamps();
        });

        // Tabla vuelos
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('origen', 150);
            $table->foreignId('id_destino')->constrained('destinos')->onDelete('cascade');
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_llegada');
            $table->decimal('precio', 10, 2);
            $table->string('aerolinea', 100);
            $table->integer('duracion');
            $table->foreignId('id_tipo_vuelo')->constrained('tipo_vuelo')->onDelete('cascade');
            $table->integer('capacidad_max');
            $table->string('estado_vuelo', 50);
            $table->timestamps();
        });

        // Tabla tipo_habi
        Schema::create('tipo_habi', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->timestamps();
        });

        // Tabla hoteles
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->foreignId('id_destino')->constrained('destinos')->onDelete('cascade');
            $table->integer('habitaciones_disponibles');
            $table->decimal('precio', 10, 2);
            $table->decimal('calificacion', 3, 2)->nullable();
            $table->foreignId('id_tipo')->constrained('tipo_habi')->onDelete('cascade');
            $table->text('descripcion');
            $table->timestamps();
        });

        // Tabla reservas
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('estado', 50);
            $table->integer('personas');
            $table->foreignId('id_cliente')->constrained('usuarios')->onDelete('cascade'); // Ajuste: `clientes` ahora es `usuarios`
            $table->timestamps();
        });

        // Tabla pago
        Schema::create('pago', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reserva')->constrained('reservas')->onDelete('cascade');
            $table->decimal('precio', 10, 2);
            $table->string('metodo', 50);
            $table->string('estado', 50);
            $table->timestamp('fecha')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
        Schema::dropIfExists('reservas');
        Schema::dropIfExists('hoteles');
        Schema::dropIfExists('tipo_habi');
        Schema::dropIfExists('vuelos');
        Schema::dropIfExists('tipo_vuelo');
        Schema::dropIfExists('destinos');
        Schema::dropIfExists('usuarios'); // Ajuste: tabla `usuarios` en lugar de `clientes`
    }
};
