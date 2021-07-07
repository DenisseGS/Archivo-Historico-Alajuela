<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    
    protected $table = 'Rol';
    
    protected $primaryKey = 'IDRol';
    
    public $timestamps = false;
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombreRol',
    ];
}
