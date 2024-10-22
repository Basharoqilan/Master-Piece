<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'comment' => 'required|string|max:500',
            'product_id' => 'required|exists:products,product_id', 
        ]);

        // Save the comment
        Comment::create([
            'user_id' => auth()->id(),
            'product_id' => $request->input('product_id'),  // Make sure product_id is passed
            'comment' => $request->input('comment'),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
