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
        // Estructura creación tabla Categorias
        Schema::create("categorias", function (Blueprint $table) {
            $table->engine="InnoDB"; // Este es el engine SQL que nos permitirá eliminar datos en cascada, es decir si tengo uno o muchos libros que pertenecen a una categoría y elimino esa categoría, los libros también
            $table->bigIncrements("id");
            $table->string("nombreCategoria", 50);
            $table->string("descripcionCategoria", 100);
            $table->timestamps(); // Creación de columnas: Creado el:, y Actualizado el:.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
