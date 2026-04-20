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

    public function data(){
        return $this->hasMany(Data::class, 'education_level_id', 'id');
    }
}
