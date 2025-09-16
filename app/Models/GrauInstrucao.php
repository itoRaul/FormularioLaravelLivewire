<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrauInstrucao extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    protected $table = 'graus_instrucaos';

    public function dados(){
        return $this->hasMany(Dados::class, 'grau_instrucao_id', 'id');
    }
}
