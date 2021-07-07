<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;


class Acta extends Model
{
    
    protected $table = 'Acta';
    
    protected $primaryKey = 'IDActa';
    
    protected $fillable = array('IDPersona', 'IDParroquia', 'IDBautismo', 'IDConfirma', 'IDMatrimonio','IDDefuncion', 'NotasMarginales');
    
    public $timestamps = false;
    
    
    
    public function persona()
    {
        return $this->hasOne('sistemaCuriaDiocesana\Persona', 'IDPersona', 'IDPersona');
    }
    
    public function parroquia()
    {
        return $this->hasMany('sistemaCuriaDiocesana\Parroquia', 'IDParroquia', 'IDParroquia');
    }
    
    
    public function confirma()
    {
        return $this->hasOne('sistemaCuriaDiocesana\ActaConfirma', 'IDConfirma', 'IDConfirma');
    }
    
    public function matrimonio()
    {
        return $this->hasOne('sistemaCuriaDiocesana\ActaMatrimonio', 'IDMatrimonio', 'IDMatrimonio');
    }
    
    public function defuncion()
    {
        return $this->hasOne('sistemaCuriaDiocesana\ActaDefuncion', 'IDDefuncion', 'IDDefuncion');
    }
    
    public function solicitudes()
    {
        return $this->belongsToMany('sistemaCuriaDiocesana\Solicitud', 'Solicitud_Acta', 'IDActa', 'IDSolicitud');
    }
}
