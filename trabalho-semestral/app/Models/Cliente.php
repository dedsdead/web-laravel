<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }

    public function caracteristica(){
        return $this->belongsTo('App\Models\Caracteristica');
    }

    protected $fillable = [
        'cpf',
        'codigo_tipo',
        'codigo_caracteristica',
        'nome',
        'telefone',
        'endereco',
        
    ];

}
