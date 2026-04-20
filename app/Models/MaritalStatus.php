<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    protected $table = 'marital_status';

    public function data()
    {
        return $this->hasMany(Data::class, 'marital_status_id', 'id');
    }
}
