<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'workouts',
        'meal_plans',
        'coaching',
        'customer_support',
        'duration',
    ];


    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'subscriptions', 'plan_id', 'user_id');
    }

    public function dailyTasks()
    {
        return $this->hasMany(DailyTask::class, 'plan_id');
    }
}
