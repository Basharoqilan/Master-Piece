<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $discounts = Discount::when($search, function ($query, $search) {
            return $query->where('discount_percentage', 'LIKE', "%{$search}%");
        })->paginate(5);

        return view('dashboard.discount', compact('discounts'));
    }








    public function create()
{
    return view('dashboard.adddiscount');
}

public function store(Request $request)
{
    $request->validate([
        'discount_percentage' => ['required', 'numeric', 'min:0', 'unique:discounts,discount_percentage'],
    ]);


    Discount::create([
        'discount_percentage' => $request->discount_percentage,
    ]);

    return redirect()->route('discount')->with('success', 'discount created successfully.');
}




public function edit($id)
{
    $discount = Discount::findOrFail($id);
    return view('dashboard.editdiscount', compact('discount'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'discount_percentage' => ['required', 'numeric', 'min:0', 'unique:discounts,discount_percentage'],

    ]);

    $discount = Discount::findOrFail($id);

    $discount->discount_percentage = $request->discount_percentage;
    $discount->save();

    return redirect()->route('discount')->with('success', 'discount updated successfully.');
}

public function show($id)
{
    $discount = Discount::findOrFail($id);
    return view('dashboard.viewdiscount', compact('discount'));
}




public function destroy($id)
{
    $discount = Discount::findOrFail($id);
    $discount->delete();
    return redirect()->route('discount')->with('success', 'discount deleted successfully.');
}


}
