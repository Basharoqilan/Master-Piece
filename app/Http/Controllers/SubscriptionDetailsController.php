<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionDetailsController extends Controller
{
    public function show($id)
    {
        $subscription = Subscription::with(['pricing_plan.dailyTasks'])->findOrFail($id);

        return view('user.subscriptionDetails', compact('subscription'));
    }
}
