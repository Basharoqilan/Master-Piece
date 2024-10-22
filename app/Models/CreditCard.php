<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $fillable = ['user_id', 'card_number', 'card_holder_name', 'expiry_date', 'cvv'];

    public function user() {
        return $this->belongsTo(User::class);
    }

public function orders()
{
    return $this->hasMany(Order::class);
}
}
