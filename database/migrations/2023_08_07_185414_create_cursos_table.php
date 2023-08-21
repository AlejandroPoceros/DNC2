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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('CursoId');
            $table->String('CursoNombre');
            $table->String('CursoDescr');
            $table->enum('CursoSeleccionado',['si','no']);
            $table->text('CursoComentario');
            $table->text('CursoObjetivo');
            $table->String('ClasifAcionId');
            $table->String('TipoCursoId');
            $table->String('TipoEnfoqueId');
            $table->text('CursoTemario');
            $table->timestamps();

    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
