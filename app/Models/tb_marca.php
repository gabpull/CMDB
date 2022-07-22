<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_marca extends Model
{
    use HasFactory;

    protected $fillable =[
        'desc_marca',
        'usuario_creacion',
        'usuario_modificacion',
    ];

}
