<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    
}