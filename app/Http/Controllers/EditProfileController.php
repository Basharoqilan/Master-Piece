<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class EditProfileController extends Controller
{
    public function edit($user_id)
{
    $user = User::findOrFail($user_id);
    return view('user.editProfile', compact('user'));
}

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if (str_word_count($value) < 2) {
                        $fail('The name must contain at least two words.');
                    }
                }
            ],
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => ['required', 'regex:/^07[0-9]{8}$/', 'string', 'max:15'],
            'address' => 'required|string|max:255',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => ['sometimes', 'nullable', 'string', 'min:8', 'regex:/[a-z]/', 'regex:/[0-9]/', 'regex:/[@$!%*?&#]/'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->location = $request->address;

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('users', 'public');
            $user->image = $imageName;
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}


