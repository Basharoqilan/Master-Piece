<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
        'location',
        'role_id',
    ];

    protected $hidden = [
        'password',
    ];



    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function comments()
{
    return $this->hasMany(Comment::class);
}


public function orders()
{
    return $this->hasMany(Order::class);
}

public function creditCards()
{
    return $this->hasMany(CreditCard::class);
}
public function subscriptions()
{
    return $this->hasMany(Subscription::class);
}
public function PricingPlan()
{
    return $this->belongsToMany(PricingPlan::class, 'subscriptions', 'user_id', 'plan_id');
}

public function diabetesAssessments()
{
    return $this->hasMany(DiabetesAssessment::class);
}

public function bmiCalculation()
{
    return $this->hasMany(BmiCalculation::class);
}

public function bodyWeightPlanner()
{
    return $this->hasMany(BodyWeightPlanner::class);
}

}
