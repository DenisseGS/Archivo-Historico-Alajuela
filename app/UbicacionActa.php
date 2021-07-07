<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class UbicacionActa extends Model
{
    
    
    protected $table = 'UbicacionActa';
    
    protected $primaryKey = 'IDUbicacionActa';
    
    protected $fillable = array('Libro', 'Folio', 'Asiento');
    
    public $timestamps = false;
}
