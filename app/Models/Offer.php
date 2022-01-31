<?php

namespace App\Models;

use Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function position()
    {
        return $this->hasOne(Position::class);
    }
}
