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
        Schema::create('ClasifAccion', function (Blueprint $table) {
            $table->id('ClasifAccionId');
            $table->String('ClasifAccionSiglas');
            $table->String('ClasifAccionNombre');
            $table->String('ClasifAccionDescrip');
            $table->String('ClasifAccionComent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_clasif_accion');
    }
};
