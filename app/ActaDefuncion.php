<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class ActaDefuncion extends Model
{
    protected $table = 'ActaDefuncion';
    
    protected $primaryKey = 'IDDefuncion';
    
    protected $fillable = array('LugarDefuncion','FechaDefuncion','CausaMuerte','IDUbicacionActaDef');
    
    public $timestamps = false;
}
