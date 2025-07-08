<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('admin.users.users', compact('users'));
    }
    
    public function create()
    {
        return view('admin.users.create');
    }

    public function delete($userId){
    User::where('id',$userId)->delete();
    
    toastr()->success('User deleted successfully!');


    return redirect() ->route('admin-users');
    }
   
}
