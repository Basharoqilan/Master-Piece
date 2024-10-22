<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
public function store(Request $request)
{
    $validated = $request->validate([
        'credit_card_number' => 'required|digits:16',
        'credit_card_holder' => 'required|string|max:255',
        'expiry_date' => 'required|date_format:Y-m-d|after:today',
        'cvv' => 'required|digits:3',
    ]);

    // Handle storing the payment details and order

    return redirect()->route('home')->with('success', 'Payment successful! Returning to home.');
}

}
