<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'screening_id', 'row_number', 'seat_number', 'code', 'status'])]

class Ticket extends Model
{
    public function user()
    {
        return $this -> belongsTo(User::class);
    }
    public function screening()
    {
        return $this -> belongsTo(Screening::class);
    }

    public function isPaid():bool
    {
        return $this -> status === 'paid';
    }
}
