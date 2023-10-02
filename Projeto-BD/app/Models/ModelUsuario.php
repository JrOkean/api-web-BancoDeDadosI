<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
    use HasFactory;
    protected $table="usuario_versao.usuario";
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'user_name',
        'senha',
        'primeiro_nome',
        'sobrenome',
    ];
}
