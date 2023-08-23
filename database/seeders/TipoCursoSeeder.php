<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipocurso')->insert([

            [
                'TpCursoNombre' => 'ACADEMICA,EDUCATIVA',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'ADMINISTRACION',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CALIDAD',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CALIDAD Y CULTURA INSTITUCIONAL',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CLOLOQUIOS',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CONAPRED',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CONFERENCIAS',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CONGRESOS',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CONTABLE FINANCIERA',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CONVENCIONES',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'CULTURA INSTITUCIONAL',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DERECHOS HUMANOS',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DESARROLLO HUMANO',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DESARROLLO ORGANIZACIONAL',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DIPLOMADOS',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DIR. CORP. DE ASUNTOS JURIDICOS',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DIRECCION GENERAL',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            [
                'TpCursoNombre' => 'DOCTORADO',
                'TpCursoDesc' => 'N/A',
                'TpCursoComen' => 'N/A',
            ],
            
            ]);
    }
}
