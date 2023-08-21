<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\curso;
class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('cursos')->insert([
        //   [
        //    'CursoSiglas' =>'abc'
        //  , 'CursoNombre' =>'nombre'
        //   , 'CursoVigenciaIni' => now()
        //   , 'CursoVigenciaFin' =>now()
        //  , 'CursoDescr' =>'desc'
        //  , 'CursoSeleccionado' =>'si'
        //  ,  'CursoComentario' =>'no'
        //  ,  'CursoObjetivo' =>'sisi'
        //  ,  'ClasifAcionId' =>'1'
        //  ,  'TipoCursoId' =>'1'
        //  ,  'TipoEnfoqueId' =>'1'
        //  ,  'CursoTemario' =>'1'
        //   ],
        //   [
        //     'CursoSiglas' =>'dos'
        //   , 'CursoNombre' =>'dos'
        //    , 'CursoVigenciaIni' => now()
        //    , 'CursoVigenciaFin' =>now()
        //   , 'CursoDescr' =>'desc'
        //   , 'CursoSeleccionado' =>'si'
        //   ,  'CursoComentario' =>'no'
        //   ,  'CursoObjetivo' =>'sisi'
        //   ,  'ClasifAcionId' =>'1'
        //   ,  'TipoCursoId' =>'1'
        //   ,  'TipoEnfoqueId' =>'1'
        //   ,  'CursoTemario' =>'1'
        //    ],

      //  ]);
    }
}
