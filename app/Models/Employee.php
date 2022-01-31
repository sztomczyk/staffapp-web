<?php

namespace App\Models;

use Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function position()
    {
        return $this->hasOne(Position::class);
    }
}
