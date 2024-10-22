<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlan;

class HomeController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::take(4)->get(); 
        return view('user.home', compact('plans'));
    }
}
