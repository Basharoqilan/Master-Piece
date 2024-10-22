<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class DetailsController extends Controller
{
   public function show($order_id)
{
    $orderItems = OrderItem::with('product')->where('order_id', $order_id)->get();
    return view('user.order_details', compact('orderItems'));
}
}
