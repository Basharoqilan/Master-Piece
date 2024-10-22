<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class PurchaseHistoryController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return view('user.PurchaseHistory', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);

        return view('user.PurchaseHistory', compact('order'));
    }
}
