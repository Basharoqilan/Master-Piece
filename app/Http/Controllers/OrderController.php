<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CreditCard;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|in:cash,credit_card',
        ]);

        $cart = session()->get('cart', ['products' => []]);
        $totalCost = 0;

        if (isset($cart['products']) && is_array($cart['products']) && count($cart['products']) > 0) {
            foreach ($cart['products'] as $id => $details) {
                $totalCost += $details['price'] * $details['quantity'];
            }

            $order = Order::create([
                'user_id' => auth()->id(),
                'total_cost' => $totalCost,
                'payment_method' => $request->payment_method,
            ]);

            foreach ($cart['products'] as $id => $details) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $id,
                    'quantity' => $details['quantity'],
                    'price' => $details['price'],
                ]);
            }

            if ($request->payment_method === 'credit_card') {
                $request->validate([
                    'credit_card_number' => 'required|digits:16',
                    'credit_card_holder' => 'required|string|max:255',
                    'expiry_date' => 'required|date',
                    'cvv' => 'required|digits:3',
                ]);

                CreditCard::create([
                    'user_id' => auth()->id(),
                    'card_number' => $request->credit_card_number,
                    'card_holder_name' => $request->credit_card_holder,
                    'expiry_date' => $request->expiry_date,
                    'cvv' => $request->cvv,
                ]);
            }

            session()->forget('cart');

            return redirect()->route('home')->with('success', 'Order placed successfully!');
        } else {
            return redirect()->back()->withErrors(['error' => 'Your cart is empty!']);
        }
    }




    public function index(Request $request)
    {
        $search = $request->input('search');

        $orders = Order::when($search, function ($query, $search) {
            return $query->whereHas('user', function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            });
        })->paginate(8);


        return view('dashboard.order', compact('orders'));
    }




  
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('order')->with('success', 'order deleted successfully.');
    }


}



