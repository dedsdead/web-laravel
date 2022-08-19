<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model{
    use HasFactory;
    use SoftDeletes;

    public function eixo(){
        return $this->belongsTo('\App\Models\Eixo');
    }

    public function disciplina(){
        return $this->hasMany('\App\Models\Disciplina');
    }

    protected $table = 'professores';
    protected $fillable = ['nome', 'email', 'siape', 'ativo', 'eixo_id'];
}