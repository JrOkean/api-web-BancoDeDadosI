<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCria extends Model
{
    use HasFactory;
    protected $table = 'usuario_versao.cria_blog';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario_cria',
        'id_blog_criado',
    ];

    public function perfilCria()
    {
        return $this->belongsTo(ModelUsuario::class, 'id_usuario_cria', 'id_usuario');
    }

    public function blogCriado()
    {
        return $this->belongsTo(ModelBlog::class, 'id_blog_criado', 'id_blog');
    }
}
