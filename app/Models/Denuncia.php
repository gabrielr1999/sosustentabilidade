<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable = [
        'id_usuario','titulo', 'descricao','estado','municipio','bairro','pntReferencia','problema','imagem','resolvido'
    ];

    public function denuncia()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
