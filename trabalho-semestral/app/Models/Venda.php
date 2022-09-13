<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model{
    use HasFactory;

    public function propriedade(){
        return $this->belongsTo('App\Models\Propriedade');
    }

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    protected $fillable = [
        'codigo_propriedade',
        'cpf_comprador',
        'data_venda',
        'valor_venda',

    ];
    
}
