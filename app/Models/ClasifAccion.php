<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasifAccion extends Model
{
    use HasFactory;

    protected $table ='ClasifAccion';
    protected $primaryKey='ClasifAccionId';
    public $incrementing =true;
    
    protected $fillable =[
        
        'ClasifAccionNombre',
        'ClasifAccionDescrip',
        'ClasifAccionComent',

    ];

}