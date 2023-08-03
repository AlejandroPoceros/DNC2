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
        Schema::create('tipo_enfoque_cursos', function (Blueprint $table) {
            $table->id('TpEnfoqueId');
            $table->string('TpEnfoqueNombre');
            $table->string('TpEnfoqueComent');
            $table->date('TpEnfoqueFecUltAct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_enfoque_cursos');
    }
};
