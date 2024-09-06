<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bombero extends Model
{
    use HasFactory;

    public function jerarquia()
    {
        return $this->belongsTo(Jerarquia::class, 'jerarquia_id', 'id');
    }
}
