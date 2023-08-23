<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ClasifAccion;

class ClasifAccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ClasifAccion')->insert([

            [
                
                'ClasifAccionNombre'  => 'ACTUALIZACION',
                'ClasifAccionDescrip'  => 'actualiza',
                'ClasifAccionComent'  => 'N/A',
            ],
            [
                
                'ClasifAccionNombre'  => 'CERTIFICACION',
                'ClasifAccionDescrip'  => 'certifica',
                'ClasifAccionComent'  => 'N/A',
            ],
            [
                
                'ClasifAccionNombre'  => 'DESARROLLO',
                'ClasifAccionDescrip'  => 'desarrolla',
                'ClasifAccionComent'  => 'N/A',
            ],
            [
                
                'ClasifAccionNombre'  => 'FORTALECIMIENTO DE DESEMPEÑO',
                'ClasifAccionDescrip'  => 'fortalece',
                'ClasifAccionComent'  => 'N/A',
            ],
            [
                
                'ClasifAccionNombre'  => 'INUCCION',
                'ClasifAccionDescrip'  => 'induce',
                'ClasifAccionComent'  => 'N/A',
            ],
            [
                
                'ClasifAccionNombre'  => 'SENSIBILIZACION',
                'ClasifAccionDescrip'  => 'sensibiliza',
                'ClasifAccionComent'  => 'N/A',
            ],
           
        ]);
    }
}
