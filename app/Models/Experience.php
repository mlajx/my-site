<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public function scopeOrdered($query, $dir = 'asc')
    {
        return $query->orderBy('order', $dir);
    }
}
