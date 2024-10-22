<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyTask extends Model
{
    use HasFactory;

    protected $fillable = ['plan_id', 'day','workouts','meal_plans','coaching','customer_support'];

    public function pricing_plan()
    {
        return $this->belongsTo(PricingPlan::class, 'plan_id');
    }
}
