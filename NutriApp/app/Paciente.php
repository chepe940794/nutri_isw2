<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public $fillable = ['nombre', 'apellido', 'cedula', 'telefono', 'direccion', 'email'];
}

