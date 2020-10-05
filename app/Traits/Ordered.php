<?php

namespace App\Traits;

trait Ordered
{
    public function scopeOrdered($query, $dir = 'asc')
    {
        return $query->orderBy('order', $dir);
    }
}
