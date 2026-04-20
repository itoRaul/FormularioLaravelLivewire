<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    protected $table = 'sexos';
    
    public function data(){

        return $this->hasMany(Data::class, 'gender_id', 'id');
    }
}
