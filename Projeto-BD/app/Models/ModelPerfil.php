<?php

namespace App\Models;

use App\Http\Controllers\UsuarioController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPerfil extends Model
{
    use HasFactory;
    protected $table="usuario_versao.perfil";
    protected $primaryKey= 'id_perfil';

    protected $fillable = [
        'data_criacao',
        'user_name',
    ];

    public function relation_usuario()
    {
        return $this->belongsTo(ModelUsuario::class);
    }

    public static function create(array $attributes = [], $usuario)
    {
        if (!isset($attributes['user_name'])) {
            $attributes['user_name'] = $usuario->user_name;
        }

        return parent::create($attributes);
    }

}
