<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    protected $table = 'estados_civis';

    public function dados(){
        return $this->hasMany(Dados::class, 'estado_civil_id', 'id');
    }

    
}
