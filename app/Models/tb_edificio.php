<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_edificio extends Model
{
    use HasFactory;

    protected $fillable =[
        'desc_edificio',
        'activo',
        'usuario_creacion',
        'usuario_modificacion',
    ];
}
