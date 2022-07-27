<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nit',
        'nombresapellidos',
        'razonsocial',
        'tipodocumento',
        'numerodocumento',
        'correoelectronico',
        'telefono',
        'celular',
        'pais',
        'departamento',
        'municipio',
        'id',
    ];
}
