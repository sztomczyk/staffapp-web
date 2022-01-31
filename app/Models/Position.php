<?php

namespace App\Models;

use Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    public function department()
    {
        return $this->hasOne(Department::class);
    }
}
