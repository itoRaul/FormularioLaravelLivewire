<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    protected $table = 'genders';

    public function data()
    {

        return $this->hasMany(Data::class, 'gender_id', 'id');
    }
}
