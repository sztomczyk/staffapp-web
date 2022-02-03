<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'name',
        'level'
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
