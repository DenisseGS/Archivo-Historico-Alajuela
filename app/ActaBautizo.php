<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class ActaBautizo extends Model
{

    protected $table ='ActaBautismo';
    protected $primaryKey = 'IDBautismo';
    protected $fillable = array( 'LugarBautismo','FechaBautismo','PadrinoBau1', 'PadrinoBau2','IDUbicacionActaBau' );
    public $timestamps = false;
    
    
    public function acta()
    {
        return $this->belongsTo('sistemaCuriaDiocesana\Acta');
    }
}
