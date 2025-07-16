<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
         $users = User::filterSearch()->get(); 

        return view('admin.users.index', compact('users'));
    }
    
    public function create()
    {
        return view('admin.users.create');
    }

    public function delete($userId){
    User::where('id',$userId)->delete();
    
    toastr()->success('User deleted successfully!');


    return redirect() ->route('admin.users.index');
    }

   public function store(Request $request)
    {   $request->validate([
        'name' => 'required|string|max:55',
        'email' => 'required|email|max:55|unique:users,email',
        'password' => 'required|string|min:6',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password, // hashed automatically if cast in model
    ]);

    toastr()->success('User created successfully!');

    return redirect()->route('admin.users.index');
    }


    
    public function edit($userId)
    {
    $user = User::findOrFail($userId);
    return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $userId)
    {
    $user = User::findOrFail($userId);

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|min:6',
    ]);

    if ($validator->fails()) {
        toastr()->warning('Please correct the errors below.');
        return redirect()->back()
            ->withInput()
            ->withErrors($validator);
    }

    // Update values
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    toastr()->success('User updated successfully!');
    return redirect()->route('admin.users.index');
    }
}

