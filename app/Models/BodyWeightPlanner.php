<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyWeightPlanner extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'age',
        'gender',
        'height',
        'current_weight',
        'target_weight',
        'activity_level',
        'start_date',
        'target_date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
