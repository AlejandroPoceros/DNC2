<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEnfoqueCurso extends Model
{
    use HasFactory;

    protected $table ='TipoEnfoqueCurso';
    protected $primaryKey='TpEnfoqueId';
    public $incrementing =true;
    
    protected $fillable =[
        'TpEnfoqueNombre',
        'TpEnfoqueComen',
        'TpEnfoqueCursoSiglas',


    ];
}
