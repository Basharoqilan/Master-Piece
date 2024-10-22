<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function showPricing()
    {
        $plans = PricingPlan::all();

        return view('user.pricing', compact('plans'));
    }

    public function index(Request $request)
{
    $search = $request->input('search');
    $plans = PricingPlan::when($search, function ($query, $search) {
        return $query->where('name', 'LIKE', "%{$search}%");
    })->paginate(4);

    return view('dashboard.price_plans', compact('plans'));
}


public function create()
{
    return view('dashboard.addprice_plans');
}



public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:pricing_plans,name',
        'price' => ['required', 'numeric', 'min:0'],
        'duration' => ['required', 'string', 'max:50'],
        'workouts' => ['required', 'string', 'max:255'],
        'meal_plans' => ['required', 'string', 'max:255'],
        'coaching' => ['required', 'string', 'max:255'],
        'customer_support' => ['required', 'string', 'max:255'],
    ]);


PricingPlan::create([
        'name' => $request->name,
        'price' => $request->price,
        'duration' => $request->duration,
        'workouts' => $request->workouts,
        'meal_plans' => $request->meal_plans,
        'coaching' => $request->coaching,
        'customer_support' => $request->customer_support,
    ]);

    return redirect()->route('price_plans')->with('success', 'price&plan created successfully.');
}





public function edit($id)
{
    $plan = PricingPlan::findOrFail($id);
    return view('dashboard.editprice_plans', compact('plan'));
}



public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:pricing_plans,name',
        'price' => ['required', 'numeric', 'min:0'],
        'duration' => ['required', 'string', 'max:50'],
        'workouts' => ['required', 'string', 'max:255'],
        'meal_plans' => ['required', 'string', 'max:255'],
        'coaching' => ['required', 'string', 'max:255'],
        'customer_support' => ['required', 'string', 'max:255'],
    ]);

    $plan = PricingPlan::findOrFail($id);

    $plan->name = $request->name;
    $plan->Price = $request->price;
    $plan->duration = $request->duration;
    $plan->workouts = $request->workouts;
    $plan->meal_plans = $request->meal_plans;
    $plan->coaching = $request->coaching;
    $plan->customer_support = $request->customer_support;
    $plan->save();

    return redirect()->route('price_plans')->with('success', 'price&plan updated successfully.');
}



public function show($id)
{
    $plan = PricingPlan::findOrFail($id);
    return view('dashboard.viewprice_plans', compact('plan'));
}




public function destroy($id)
{
    $plan = PricingPlan::findOrFail($id);
    $plan->delete();
    return redirect()->route('price_plans')->with('success', 'price and plan deleted successfully.');
}

}



