<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyWeightPlanner;

class BodyWeightPlannerController extends Controller
{
    public function showForm()
    {
        return view('user.body_weight_planner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required|integer',
            'gender' => 'required|string',
            'height' => 'required|integer',
            'current_weight' => 'required|integer',
            'target_weight' => 'required|integer',
            'activity_level' => 'required|string',
            'start_date' => 'required|date',
            'target_date' => 'required|date',
        ]);

        if (auth()->check()) {
            BodyWeightPlanner::create([
                'user_id' => auth()->id(),
                'age' => $request->age,
                'gender' => $request->gender,
                'height' => $request->height,
                'current_weight' => $request->current_weight,
                'target_weight' => $request->target_weight,
                'activity_level' => $request->activity_level,
                'start_date' => $request->start_date,
                'target_date' => $request->target_date,
            ]);
        }

        $target_weight = $request->target_weight;
        $days_to_target = $this->calculateDaysToTarget($request->start_date, $request->target_date);
        $calories_per_day = $this->calculateCaloriesPerDay($request->current_weight, $target_weight, $days_to_target);

        return view('user.body_weight_result', compact('target_weight', 'days_to_target', 'calories_per_day'));
    }


    private function calculateDaysToTarget($startDate, $targetDate)
    {
        return \Carbon\Carbon::parse($targetDate)->diffInDays(\Carbon\Carbon::parse($startDate));
    }

    private function calculateCaloriesPerDay($currentWeight, $targetWeight, $daysToTarget)
    {
        $calorie_deficit_per_kg = 7700;
        $total_calories_needed = ($currentWeight - $targetWeight) * $calorie_deficit_per_kg;

        return round($total_calories_needed / $daysToTarget, 1);
    }

}
