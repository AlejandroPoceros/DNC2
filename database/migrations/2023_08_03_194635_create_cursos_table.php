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
            $table->date('CursoVigenciaIni');
            $table->date('CursoVigenciaFin');
            $table->string('CursoNombre');
            $table->string('CursoDescrip');
            $table->string('ClasifAccionId');
            $table->string('TpCursoId');
            $table->string('TpEnfoqueId');
            //verificar este dato
            $table->enum('CursoSeleccionado',['si','no']);
            $table->string('CursoComent');
            $table->date('CursoFecUltAct');
            $table->string('CursoTemario');
            $table->string('CursoObjetivo');
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
