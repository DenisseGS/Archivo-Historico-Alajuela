<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class ActaConfirma extends Model
{
    protected $table = 'ActaConfirma';
    
    protected $primaryKey = 'IDConfirma';
    
    protected $fillable = array( 'LugarConfirma','FechaConfirma','PadrinoCon1', 'PadrinoCon2','IDUbicacionActaCon');
    
    public $timestamps = false;
}
