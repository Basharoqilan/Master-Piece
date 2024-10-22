<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCreditForm()
    {
        return view('user.credit_card');
    }

    public function cash()
    {
        return redirect()->route('home')->with('success', 'Payment successful with cash!');
    }
}
