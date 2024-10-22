<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['role'];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'role_id');
    }


    public function pricing_plans()
{
    return $this->belongsTo(PricingPlan::class);
}
}
