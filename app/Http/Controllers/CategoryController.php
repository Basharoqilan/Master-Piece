<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');


        $categories = Category::when($search, function ($query, $search) {
            return $query->where('category_name', 'LIKE', "%{$search}%");
        })->paginate(4);

        return view('dashboard.category', compact('categories'));
    }





    public function create()
{
    return view('dashboard.addcategory');
}


public function store(Request $request)
{
    $request->validate([
        'category_name' => 'required|string|max:255|unique:categories,category_name',
    ]);

    Category::create([
        'category_name' => $request->category_name,
    ]);

    return redirect()->route('category')->with('success', 'Category added successfully.');
}


public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('dashboard.editcategory', compact('category'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'category_name' => 'required|string|max:255|unique:categories,category_name',
    ]);

    $category = Category::findOrFail($id);

    $category->category_name = $request->category_name;
    $category->save();

    return redirect()->route('category')->with('success', 'Category updated successfully.');
}




public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();
    return redirect()->route('category')->with('success', 'category deleted successfully.');
}

}
