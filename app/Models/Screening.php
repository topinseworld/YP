<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    public function hasStarted(): bool
    {
        return $this -> starts_at->isPast();
    }

    public function scopeUpcoming($query)
    {
        return $query -> where('starts_at', '>', now());
    }
}
