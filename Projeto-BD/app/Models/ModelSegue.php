<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSeguir extends Model
{
    use HasFactory;
     // Defina os campos que não são autoincrementáveis
     protected $table = 'usuario_versao.segue';
     protected $primaryKey = null;
     public $incrementing = false;
 
     // Desative os timestamps, pois a tabela não possui colunas 'created_at' e 'updated_at'
     public $timestamps = false;
 
     protected $fillable = [
         'id_seguidor',
         'id_seguido',
     ];

     public function relation_segue(){
        return $this->hasMany(Perfil::class, 'id_perfil');
    }
 
     // Define os relacionamentos com a tabela "usuarios_versao.perfil"
    public function seguidor()
    {
         return $this->belongsTo(Perfil::class, 'id_seguidor', 'id_perfil');
    }
 
    public function seguido()
    {
         return $this->belongsTo(Perfil::class, 'id_seguido', 'id_perfil');
    }
}
