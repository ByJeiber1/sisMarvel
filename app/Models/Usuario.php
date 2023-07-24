<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends Model implements Authenticatable
{
    // Nombre de la tabla en la base de datos
    protected $table = 'usuario';

    // Columnas de la tabla que se pueden rellenar
    protected $fillable = [
        'usuEmail',
        'usuNombre1',
        'usuNombre2',
        'usuApell1',
        'usuApell2',
        'usuFechNac',
        'usuPassword',
        'usuUsername',
        'usuPais',
        'usuCiudad',
        'usuTipoCuenta'
    ];

    // Columnas de fecha que se manejan como objetos DateTime de PHP
    protected $dates = [
        'usuFechNac',
        'created_at',
        'updated_at'
    ];

    // Valores que se convierten a tipos de datos específicos

    // Desactiva el uso de timestamps en la tabla
    public $timestamps = false;

    // Define la clave primaria de la tabla
    protected $primaryKey = 'usuEmail';

    public function getAuthIdentifierName()
    {
        return 'usuEmail';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->usuPassword;
    }

    public function getRememberToken()
    {
        return $this->usuRememberToken;
    }

    public function setRememberToken($value)
    {
        $this->usuRememberToken = $value;
    }

    public function getRememberTokenName()
    {
        return 'usuRememberToken';
    }
}

