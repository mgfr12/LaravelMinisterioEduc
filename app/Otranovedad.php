<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otranovedad extends Model
{
    protected $fillable = [
        'id','colegio_id', 'dni', 'ApellidoNommbre', 'Cargo', 'Caracter', 'GradoSeccion', 'desdeN', 'hastaN','totalN','articulo','observacionesN'
    ];
    protected $primaryKey='id';
}
