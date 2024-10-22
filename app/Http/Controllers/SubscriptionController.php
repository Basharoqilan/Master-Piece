<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreditCard;
use App\Models\Subscription;

class SubscriptionController extends Controller
{


    public function showForm($plan_id)
{


    return view('user.subscription', compact('plan_id'));


}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'credit_card_number' => 'required|digits:16',
            'credit_card_holder' => 'required|string|max:255',
            'expiry_date' => 'required|date_format:Y-m-d|after:today',
            'cvv' => 'required|digits:3',
            'plan_id' => 'required|exists:pricing_plans,id',
        ]);


        CreditCard::create([
            'user_id' => auth()->id(),
            'card_number' => $request->credit_card_number,
            'card_holder_name' => $request->credit_card_holder,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
        ]);

        Subscription::create([
            'user_id' => auth()->id(),
            'plan_id' => $request->plan_id,
        ]);

        return redirect()->route('home')->with('success', 'Subscription successful!');

}


public function index(Request $request)
{
    $search = $request->input('search');

    $subscriptions = Subscription::when($search, function ($query, $search) {
        return $query->whereHas('user', function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%");
        });
    })->paginate(5);

    return view('dashboard.subscription', compact('subscriptions'));
}

public function show($id)
{
    $subscription = Subscription::with(['user', 'pricing_plan'])->findOrFail($id);
    return view('dashboard.viewsubscription', compact('subscription'));
}


public function destroy($id)
{
    $subscription = Subscription::findOrFail($id);


    $subscription->delete();

    return redirect()->route('subscription')->with('success', 'subscription deleted successfully.');
}
}
