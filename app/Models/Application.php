<?php

namespace App\Models;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'name',
        'lastname',
        'phone',
        'email',
        'message',
        'cv_url',
        'accepted_policy'
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
