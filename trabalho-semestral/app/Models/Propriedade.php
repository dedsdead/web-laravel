<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }

    public function caracteristica(){
        return $this->belongsTo('App\Models\Caracteristica');
    }

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }
    
    protected $fillable = [
        'codigo_tipo',
        'codigo_caracteristica',
        'cpf_cliente',
        'nome',
        'descricao',
        'metragem',
        'matricula',
        'disponivel',

    ];
    
}
