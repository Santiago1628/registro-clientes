<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre', 'apellidos', 'correo', 'contrasena',
        'password_hash', 'token', 'noches', 'f_ingreso', 'f_salida'
    ];

}
