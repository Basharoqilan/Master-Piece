<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{



    public function index(Request $request)
    {

        $search = $request->input('search');
        $users = User::when($search, function ($query, $search) {
                return $query->where('name', 'LIKE', "%{$search}%");
            })->paginate(10);

        return view('dashboard.users', compact('users'));
    }






public function create()
{
    return view('dashboard.addUser');
}



public function store(Request $request)
{
    $request->validate([
        'name' => ['required','string','max:255',
            function ($attribute, $value, $fail) {
                if (str_word_count($value) < 2) {
                    $fail('The name must contain at least two words.');
                }
            }
        ],
        'email' => 'required|string|email|max:255|unique:users',
        'phone' => ['required','regex:/^07[0-9]{8}$/','string','max:15'],
        'location'=> 'required','string','max:255',
        'role_id' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
'password' => ['required','string','min:8','regex:/[a-z]/','regex:/[0-9]/','regex:/[@$!%*?&#]/', ],]);

$imageName = null;

if ($request->hasFile('image')) {
    $imageName = $request->file('image')->store('users', 'public');
}

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'location' => $request->location,
        'role_id' => $request->role_id,
        'image' => $imageName,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('users')->with('success', 'User created successfully.');
}





public function edit($id)
{
    $user = User::findOrFail($id);
    return view('dashboard.editUser', compact('user'));
}






public function update(Request $request, $id)
{
    $request->validate([
        'name' => ['required','string','max:255',
            function ($attribute, $value, $fail) {
                if (str_word_count($value) < 2) {
                    $fail('The name must contain at least two words.');
                }
            }
        ],
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'phone' => ['required','regex:/^07[0-9]{8}$/','string','max:15'],
        'location'=> 'required','string','max:255',
        'role_id' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password' => ['sometimes','nullable','string','min:8','regex:/[a-z]/','regex:/[0-9]/','regex:/[@$!%*?&#]/'],
    ]);

    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->location = $request->location;
    $user->role_id = $request->role_id;
    $imageName = null;
    if ($request->hasFile('image')) {
        $imageName = $request->file('image')->store('users', 'public');
        $user->image = $imageName;
    }

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('users')->with('success', 'User updated successfully.');
}



// public function show($id)
// {
//     $user = User::findOrFail($id);
//     return view('dashboard.viewUser', compact('user'));
// }




public function destroy($id)
{
    $user = User::findOrFail($id);

    if ($user->image) {
        \Storage::delete('public/' . $user->image);
    }

    $user->delete();

    return redirect()->route('users')->with('success', 'User deleted successfully.');
}


public function showAdminProfile()
{
    $admin = Auth::user();
    return view('dashboard.AdminProfile', compact('admin'));
}



public function editAdmin($id) {
    $admin = User::findOrFail($id);
    return view('dashboard.AdminProfileEdit', compact('admin'));
}


public function updateProfile(Request $request)
{
    $admin = Auth::user();

    $request->validate([
        'name' => ['required','string','max:255',
            function ($attribute, $value, $fail) {
                if (str_word_count($value) < 2) {
                    $fail('The name must contain at least two words.');
                }
            }
        ],
        'email' => 'required|string|email|max:255|unique:users,email,' . $admin->id,  // Exclude current user's email from unique check
        'phone' => ['required','regex:/^07[0-9]{8}$/','string','max:15'],
        'location'=> 'required|string|max:255',
        'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password' => ['sometimes','nullable','string','min:8','regex:/[a-z]/','regex:/[0-9]/','regex:/[@$!%*?&#]/'],
    ]);

    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->phone = $request->phone;
    $admin->location = $request->location;

    if ($request->hasFile('image')) {
        $imageName = $request->file('image')->store('admins', 'public');
        $admin->image = $imageName;
    }
    if ($request->filled('password')) {
        $admin->password = bcrypt($request->password);
    }

    $admin->save();

    return redirect()->route('AdminProfile')->with('success', 'Profile updated successfully.');
}


public function storeAdmin(Request $request)
{
    $request->validate([
        'name' => ['required','string','max:255',
            function ($attribute, $value, $fail) {
                if (str_word_count($value) < 2) {
                    $fail('The name must contain at least two words.');
                }
            }
        ],
        'email' => 'required|string|email|max:255|unique:users',
        'phone' => ['required','regex:/^07[0-9]{8}$/','string','max:15'],
        'location'=> 'required','string','max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
'password' => ['required','string','min:8','regex:/[a-z]/','regex:/[0-9]/','regex:/[@$!%*?&#]/', ],]);

    $imageName = $request->file('image')->store('users', 'public');

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'location' => $request->location,
        'image' => $imageName,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('AdminProfile')->with('success', 'User created successfully.');
}
}

