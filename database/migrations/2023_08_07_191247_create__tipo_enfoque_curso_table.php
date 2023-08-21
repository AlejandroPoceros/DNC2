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
        Schema::create('TipoEnfoqueCurso', function (Blueprint $table) {
            $table->id('TpEnfoqueId');
            $table->String('TpEnfoqueNombre');
            $table->text('TpEnfoqueComen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_tipo_enfoque_curso');
    }
};
