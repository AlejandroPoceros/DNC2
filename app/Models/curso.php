<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
 use HasFactory;
    protected $table ='cursos';
    protected $primaryKey='CursoId';
    public $incrementing =true;
    protected $fillable =[
        'CursoNombre',
        'CursoDescr',
        'TipoEnfoqueId',
        'TipoCursoId',
        'CursoObjetivo',
        'CursoTemario',
        'CursoComentario',
        'ClasifAcionId',


    ];
   
}
