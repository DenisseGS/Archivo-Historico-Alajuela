<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class ActaMatrimonio extends Model
{
    protected $table = 'ActaMatrimonio';
    protected $primaryKey = 'IDMatrimonio';
    protected $fillable = array( 'LugarMatrimonio','FechaMatrimonio','NombreConyugue','IDUbicacionActaMat');
    public $timestamps = false;
}
