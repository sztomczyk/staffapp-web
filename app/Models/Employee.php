<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['position_id', 'name', 'lastname', 'email', 'phone'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
