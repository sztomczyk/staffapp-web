<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'location',
        'work_plan',
        'work_mode',
        'contract_type',
        'recruitment_type',
        'salary_from',
        'salary_to',
        'expires_at'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
