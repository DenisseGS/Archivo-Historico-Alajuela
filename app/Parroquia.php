<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    
    protected $table = 'Parroquia';
    
    protected $primaryKey = 'IDParroquia';
    
    protected $fillable = array('NombreParroquia');
    
    public $timestamps = false;
    
    
    public function acta()
    {
        return $this->belongsTo('sistemaCuriaDiocesana\Acta', 'IDParroquia', 'IDParroquia');
    }
    
    public function user() {
        return $this->hasMany('sistemaCuriaDiocesana\User', 'IDParroquia', 'IDParroquia');
    }
}
