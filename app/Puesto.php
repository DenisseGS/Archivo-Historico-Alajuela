<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'Puesto';
    
    protected $primaryKey = 'IDPuesto';
    
    public $timestamps = false;
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombrePuesto',
    ];
}
