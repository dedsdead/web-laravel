<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model{
    use HasFactory;

    public function propriedade(){
        return $this->belongsTo('App\Models\Propriedade', 'codigo_propriedade');
    }

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'id_comprador');
    }

    protected $fillable = [
        'codigo_propriedade',
        'id_comprador',
        'data_venda',
        'valor_venda',

    ];
    
}
