<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBlog extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table="usuario_versao.blog";
    protected $primaryKey= 'id_blog';

    protected $fillable = [
        'data_criacao',
        'titulo',
        'assunto'
    ];
}
