<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(Request $request)
    {
        $query = Product::query();

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $products = $query->paginate(12);
        $categories = Category::all();

        return view('user.product', compact('products', 'categories'));
    }









    public function show($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        return view('user.viewProduct', compact('product'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');


        $products = Product::when($search, function ($query, $search) {
            return $query->where('name', 'LIKE', "%{$search}%");
        })->paginate(10);

        return view('dashboard.product', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        $discounts = Discount::all();
        return view('dashboard.addproduct', compact('categories', 'discounts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|integer',
            'discount_id' => 'nullable|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images'), $imageName);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'discount_id' => $request->discount_id,
            'image' => $imageName,
        ]);

        return redirect()->route('product')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $discounts = Discount::all();
        return view('dashboard.editproduct', compact('product', 'categories', 'discounts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|integer',
            'discount_id' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->discount_id = $request->discount_id;

        if ($request->hasFile('image')) {
            if (file_exists(public_path('images/' . $product->image))) {
                unlink(public_path('images/' . $product->image));
            }

            $imageName = time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('images'), $imageName);

            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('product')->with('success', 'Product updated successfully.');
    }


    public function show2($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.viewproduct', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            $imagePath = public_path('images/' . $product->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $product->delete();

        return redirect()->route('product')->with('success', 'Product deleted successfully.');
    }

}
