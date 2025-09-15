<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dados extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomecompleto',
        'nomesocial',
        'cpf',
        'rg',
        'email',
        'telefone',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'complemento'
    ];

    /*
    public function estadoCivil(){
        return $this->hasOne(EstadoCivil::class, 'id', 'estado_civil_id');
    }
    */
}
