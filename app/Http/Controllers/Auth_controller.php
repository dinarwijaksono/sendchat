<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Auth_controller extends Controller
{
    public function index()
    {
        return view('Auth/login');
    }


    public function create()
    {
        return view('Auth/create');
    }
    

    public function store(Request $request)
    {
        $request = $request->validate([
            'username' => 'required|min:4|max:40', 
            'email' => 'required|unique:users',
            'password' => 'required|same:password_confirmation'
        ]);

        $request['password'] = Hash::make($request['password']);

        User::create($request);
        
        return back()->with('status', "username success to create.");
        

                
    }
    
    
}