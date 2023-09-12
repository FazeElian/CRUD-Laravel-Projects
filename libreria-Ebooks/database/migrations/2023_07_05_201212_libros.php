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
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger("idCategoria")->unsigned(); // Dato externo de categorías, la propiedad unsigned nos va a permitir características de ese campo relacional
            $table->string("nombreLibro", 100);
            $table->string('autorLibro', 50);
            $table->string('descripcionLibro', 100);
            $table->timestamps();

            // Relación con la tabla categorías: Indico la llave foránea y la referencia de la columna que está en una tabla (categorias), y por último ponemos la eliminación por cascada
            $table->foreign("idCategoria")->references("id")->on("categorias")->onDelete("cascade");
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
