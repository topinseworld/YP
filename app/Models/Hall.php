<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = ['name', 'rows', 'seats'];
    public function totalSeats(): int{
        return $this->rows * $this->seats
    }
    
}
