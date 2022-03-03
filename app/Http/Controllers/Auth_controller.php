<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Auth_controller extends Controller
{
    public function index()
    {
        return view('Auth/login');
    }


    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with([
            'loginFailed' => 'Email / password salah.',
        ]);

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
    


    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/Auth/index');
    }
    
    
    
}