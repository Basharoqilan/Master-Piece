<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }



    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user_name' => $user->name]);

            if ($user->role_id == 1) {
                return redirect()->intended('dashboard');
            } elseif ($user->role_id == 2) {
                return redirect()->intended('/');
            }
        }


        return redirect()->back()->withInput()->with('error', 'The provided credentials do not match our records.');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }



    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255',
                function ($attribute, $value, $fail) {
                    if (str_word_count($value) < 2) {
                        $fail('The name must contain at least two words.');
                    }
                }
            ],
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => ['required', 'regex:/^07[0-9]{8}$/', 'string', 'max:15'],
            'location' => 'required', 'string', 'max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => ['required', 'string', 'min:8', 'regex:/[a-z]/', 'regex:/[0-9]/', 'regex:/[@$!%*?&#]/', ],
        ]);

        $imageName = null; 

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('users', 'public');
        }


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'image' => $imageName,
            'password' => bcrypt($request->password),
            'role_id' => 2,
        ]);

        return redirect()->route('login')->with('success', 'User created successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
