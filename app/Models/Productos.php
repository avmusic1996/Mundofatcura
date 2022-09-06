<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    // protected $table = "productos";
    // protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'imagenuna',
        
        'nombrepro',
        'folder',
        'categoria_id',
        'stockpro',
        'marcapro',
        'codigopro',
        'modelopro',
        'codigoprosku',
        'valorunidad',
        'iva',
    ];

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
