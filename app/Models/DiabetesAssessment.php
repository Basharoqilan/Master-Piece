<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiabetesAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'age_group',
        'gender',
        'descent',
        'birthplace',
        'parental_diabetes',
        'blood_glucose',
        'blood_pressure_medication',
        'smoking',
        'vegetable_intake',
        'physical_activity',
        'waist_measurement',
        'total_score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
