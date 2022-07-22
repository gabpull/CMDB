<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_modelo extends Model
{
    use HasFactory;

    protected $fillable =[
        'desc_modelo',
        'usuario_creacion',
        'usuario_modificacion',
        'id_marca',
    ];

    public function marca(){
        return $this->belongsTo(tb_marca::class, 'id_marca');
    }
}
