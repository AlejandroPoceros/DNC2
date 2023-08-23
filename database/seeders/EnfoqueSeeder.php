<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TipoEnfoqueCurso;
class EnfoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipoenfoquecurso')->insert([

            [
                'TpEnfoqueNombre' => 'ELECCION GENERAL',
                 'TpEnfoqueComen' => 'N/A',
            ],
            [
                'TpEnfoqueNombre' => 'ELECCION POR MANDO MEDIO',
                 'TpEnfoqueComen' => 'N/A',
            ],
            [
                'TpEnfoqueNombre' => 'ELECCION POR SECRETARIA',
                 'TpEnfoqueComen' => 'NNGUNO',
            ],
            ]);
    }
}
