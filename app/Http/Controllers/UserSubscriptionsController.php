<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlan;
use App\Models\Subscription;
class UserSubscriptionsController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $subscriptions = Subscription::with('pricing_plan')->where('user_id', $user->id)->get();

        return view('user.UserSubscriptions', compact('subscriptions'));
    }


    public function show($id)
    {
        $subscription = Subscription::with('pricingPlan')->findOrFail($id);

        return view('user.UserSubscriptionsDetails', compact('subscription'));
    }
}

