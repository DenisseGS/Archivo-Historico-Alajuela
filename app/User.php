<?php

namespace sistemaCuriaDiocesana;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'User';
    
    protected $primaryKey = 'IDUser';
    
    public $timestamps = false;
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre', 'PrimerApellido', 'SegundoApellido', 'Email', 'IDParroquia', 'NumCelular', 'IDPuesto', 'IDRol', 'Activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Contrasenna', 'remember_token',
    ];
    
    
    public function getAuthPassword()
    {
        return $this->Contrasenna;
    }
    
    
    public function rol() {
        return $this->hasOne('sistemaCuriaDiocesana\Rol', 'IDRol', 'IDRol');
    }
    
    public function puesto() {
        return $this->hasOne('sistemaCuriaDiocesana\Puesto', 'IDPuesto', 'IDPuesto');
    }
    
    public function parroquia() {
        return $this->hasOne('sistemaCuriaDiocesana\Parroquia', 'IDParroquia', 'IDParroquia');
    }
}
