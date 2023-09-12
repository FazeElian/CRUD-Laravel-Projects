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
        Schema::create('empleados', function (Blueprint $table) {
            // Creación de columnas de tabla "empleados"
            $table->id();
            $table->string("nombre", 30);
            $table->string("apellido", 30);
            $table->string("cargo", 30);
            $table->string("descripcionCargo", 100)->default("");
            $table->float("salario")->default(0);
            $table->timestamps(); // Marca de tiempo - Fecha de creación y última modificación automaticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
