<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyTask;
class PlanDetailsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $tasks = DailyTask::when($search, function ($query, $search) {
            return $query->whereHas('pricing_plan', function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            });
        })->paginate(30);


        return view('dashboard.PlanDetails', compact('tasks'));
    }









public function create()
{
    return view('dashboard.addPlanDetails');
}

public function store(Request $request)
{
    $request->validate([
        'plan_id' => ['required', 'numeric'],
        'day' => ['required', 'numeric', 'min:1'],
        'workouts' => ['required', 'string', 'max:255'],
        'meal_plans' => ['required', 'string', 'max:255'],
        'coaching' => ['required', 'string', 'max:255'],
        'customer_support' => ['required', 'string', 'max:255'],
    ]);

    DailyTask::create([
        'plan_id' => $request->plan_id,
        'day' => $request->day,
        'workouts' => $request->workouts,
        'meal_plans' => $request->meal_plans,
        'coaching' => $request->coaching,
        'customer_support' => $request->customer_support,
    ]);

    return redirect()->route('PlanDetails')->with('success', 'PlanDetails added successfully');
}




public function edit($id)
{
    $dailyTasks = DailyTask::findOrFail($id);
    return view('dashboard.editPlanDetails', compact('dailyTasks'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'plan_id' => ['required', 'numeric'],
        'day' => ['required', 'numeric', 'min:1'],
        'workouts' => ['required', 'string', 'max:255'],
        'meal_plans' => ['required', 'string', 'max:255'],
        'coaching' => ['required', 'string', 'max:255'],
        'customer_support' => ['required', 'string', 'max:255'],
    ]);


    $dailyTasks = DailyTask::findOrFail($id);

    $dailyTasks->plan_id = $request->plan_id;
    $dailyTasks->day = $request->day;
    $dailyTasks->workouts = $request->workouts;
    $dailyTasks->meal_plans = $request->meal_plans;
    $dailyTasks->coaching = $request->coaching;
    $dailyTasks->customer_support = $request->customer_support;
    $dailyTasks->save();

    return redirect()->route('PlanDetails')->with('success', 'PlanDetails updated successfully.');
}

public function show($id)
{
    $dailyTasks = DailyTask::findOrFail($id);
    return view('dashboard.viewPlanDetails', compact('dailyTasks'));
}




public function destroy($id)
{
    $dailyTasks = DailyTask::findOrFail($id);
    $dailyTasks->delete();
    return redirect()->route('PlanDetails')->with('success', 'PlanDetails deleted successfully.');
}
}
