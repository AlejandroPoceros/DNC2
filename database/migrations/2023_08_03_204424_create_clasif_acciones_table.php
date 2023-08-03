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
        Schema::create('Clasif_Acciones', function (Blueprint $table) {
            $table->id('ClasifAccionId');
            $table->string('ClasifAccionNombre');
            $table->string('ClasifAccionDescrip');
            $table->string('ClasifAccionComent');
            $table->date('ClasifAccionFecUltAct');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Clasif_Acciones');
    }
};
