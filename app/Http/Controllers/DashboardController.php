<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use App\Models\PricingPlan;
use App\Models\Subscription;
use App\Models\DailyTask;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCostSum = Order::sum('total_cost');
        $totalOrder = Order::count();
        $users = User::where('role_id', '!=', 1)->count();
        $admin = User::where('role_id', '!=', 2)->count();
        $product = Product::count();
        $minPrice = Product::min('price');
        $maxPrice = Product::max('price');
        $countCategories = Category::count();
        $categories = Category::all();
        $discount = Discount::count();
        $minDiscount = Discount::min('discount_percentage');
        $maxDiscount = Discount::max('discount_percentage');
        $Price_Plan = PricingPlan::count();
        $minPriceOfplan = PricingPlan::min('price');
        $maxPriceOfplan = PricingPlan::max('price');
        $totalplanSum = DB::table('subscriptions')
        ->join('pricing_plans', 'subscriptions.plan_id', '=', 'pricing_plans.id')
        ->sum('pricing_plans.price');
        $totalplan = Subscription::count();

        $DailyTask = DailyTask::count();
        $minday = DB::select('
        SELECT MIN(day_count) AS min_days
        FROM (
            SELECT COUNT(day) AS day_count
            FROM daily_tasks
            GROUP BY plan_id
        ) AS counts
    ');
    $minDays = $minday[0]->min_days;
    $Maxday = DB::select('
    SELECT Max(day_count) AS min_days
    FROM (
        SELECT COUNT(day) AS day_count
        FROM daily_tasks
        GROUP BY plan_id
    ) AS counts
');
$MaxDays = $Maxday[0]->min_days;



$paymentMethodData = Order::select('payment_method', DB::raw('count(*) as total'))
->groupBy('payment_method')
->pluck('total', 'payment_method')->all();



$subscriptionsData = DB::table('subscriptions')
->select('user_id', DB::raw('count(*) as total'))
->groupBy('user_id')
->pluck('total', 'user_id')->all();


$subscriptionsDataByPlan_id = DB::table('subscriptions')
    ->select(DB::raw('COUNT(*) as total_subscriptions, plan_id'))
    ->groupBy('plan_id')
    ->pluck('total_subscriptions', 'plan_id')->all();


        return view('dashboard.dashboard', compact('totalCostSum' , 'totalOrder' , 'users' , 'admin','product','minPrice',
        'maxPrice','countCategories','categories','discount','maxDiscount','minDiscount','Price_Plan','minPriceOfplan','maxPriceOfplan',
    'paymentMethodData','totalplanSum','totalplan','DailyTask','minDays','MaxDays','subscriptionsData','subscriptionsDataByPlan_id'));



    }
}
