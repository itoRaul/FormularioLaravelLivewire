<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state_id',
        'status'
    ];

    protected $table = 'cities';

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function dados()
    {
        return $this->hasMany(Dados::class);
    }
}
