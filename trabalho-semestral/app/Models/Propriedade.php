<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo', 'codigo_tipo');
    }

    public function caracteristica(){
        return $this->belongsTo('App\Models\Caracteristica', 'codigo_caracteristica');
    }

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }
    
    protected $fillable = [
        'codigo_tipo',
        'codigo_caracteristica',
        'id_cliente',
        'descricao',
        'metragem',
        'matricula',
        'disponivel',

    ];
    
}
