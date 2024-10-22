<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Add a product to the cart
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        // Retrieve the cart from the session or create an empty array if it doesn't exist
        $cart = session()->get('cart', [
            'products' => [],
            'totalQuantity' => 0,  // Initialize totalQuantity
            'totalPrice' => 0      // Initialize totalPrice
        ]);

        // Ensure that totalQuantity and totalPrice are initialized
        if (!isset($cart['totalQuantity'])) {
            $cart['totalQuantity'] = 0;
        }

        if (!isset($cart['totalPrice'])) {
            $cart['totalPrice'] = 0;
        }

        // Check if the product already exists in the cart
        if (isset($cart['products'][$id])) {
            // Increase the quantity if the product is already in the cart
            $cart['products'][$id]['quantity']++;
        } else {
            // Add new product to the cart
            $cart['products'][$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        // Update the total quantity and total price of the cart
        $cart['totalQuantity']++; // Increment totalQuantity
        $cart['totalPrice'] += $product->price; // Increment totalPrice

        // Update the session with the new cart
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Display the cart
    public function index()
    {
        // Retrieve the cart from the session
        $cart = session()->get('cart', [
            'products' => [],
            'totalQuantity' => 0,
            'totalPrice' => 0
        ]);

        return view('user.cart', compact('cart'));
    }

    // Remove a product from the cart
    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart['products'][$id])) {
            // Update total quantity and total price
            $cart['totalQuantity'] -= $cart['products'][$id]['quantity'];
            $cart['totalPrice'] -= $cart['products'][$id]['quantity'] * $cart['products'][$id]['price'];

            // Remove the product from the cart
            unset($cart['products'][$id]);

            // If no products are left, reset the cart
            if (empty($cart['products'])) {
                session()->forget('cart');
            } else {
                // Update the session with the modified cart
                session()->put('cart', $cart);
            }
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }

    // Decrease the quantity of a product in the cart
    public function decreaseQuantity(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart['products'][$id]) && $cart['products'][$id]['quantity'] > 1) {
            // Decrease the product quantity
            $cart['products'][$id]['quantity']--;
            $cart['totalQuantity']--;
            $cart['totalPrice'] -= $cart['products'][$id]['price'];

            // Update the session with the modified cart
            session()->put('cart', $cart);
        } elseif (isset($cart['products'][$id])) {
            // If the product quantity is 1, remove the product from the cart
            $this->remove($request, $id);
        }

        return redirect()->back()->with('success', 'Product quantity decreased successfully!');
    }

    // Increase the quantity of a product in the cart
    public function increaseQuantity(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart['products'][$id])) {
            // Increase the product quantity
            $cart['products'][$id]['quantity']++;
            $cart['totalQuantity']++;
            $cart['totalPrice'] += $cart['products'][$id]['price'];

            // Update the session with the modified cart
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product quantity increased successfully!');
    }
}
