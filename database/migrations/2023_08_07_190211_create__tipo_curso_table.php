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
        Schema::create('TipoCurso', function (Blueprint $table) {
            $table->id('TpCursoId');
            $table->String('TpCursoSiglas');
            $table->String('TpCursoNombre');
            $table->String('TpCursoDesc');
            $table->String('TpCursoComen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tipo_curso');
    }
};
