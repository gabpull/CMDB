<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_piso extends Model
{
    use HasFactory;

    protected $fillable =[
        'desc_piso',
        'id_edificio',
        'activo',
        'usuario_creacion',
        'usuario_modificacion',
    ];

    public function edificio(){
        return $this->belongsTo(tb_edificio::class, 'id_edificio');
    }
}
