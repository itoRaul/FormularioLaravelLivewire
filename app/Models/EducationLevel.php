<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    protected $table = 'education_levels';

    public function data()
    {
        return $this->hasMany(Data::class, 'education_level_id', 'id');
    }
}
