<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dados extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomecompleto',
        'estado_civil_id',
        'grau_instrucao_id',
        'nacionalidade',
        'city_id',
        'sexo_id',
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

    public function estadoCivil(){
        return $this->belongsTo(EstadoCivil::class);
    }

    public function grauInstrucao(){
        return $this->belongsTo(GrauInstrucao::class);
    }

    public function sexo(){
        return $this->belongsTo(Sexo::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

}
