<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'socialname',
        'cpf',
        'rg',
        'email',
        'phone',
        'cep',
        'address',
        'number',
        'neighborhood',
        'complement'
    ];
}
