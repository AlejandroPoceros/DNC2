<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCurso extends Model
{
    use HasFactory;

    protected $table ='TipoCurso';
    protected $primaryKey='TpCursoId';
    public $incrementing =true;
    
    protected $fillable =[
        'TpCursoNombre',
        'TpCursoDesc',
        'TpCursoComen',
        'TpCursoSiglas',

    ];
}
