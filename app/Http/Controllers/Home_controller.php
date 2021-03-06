<?php

namespace App\Http\Controllers;

use App\Models\ListContact;
use Illuminate\Http\Request;

class Home_controller extends Controller
{
    public function getUser($data)
    {
        return auth()->user()["$data"];
    }
    
    
    
    public function index()
    {
        $data['listContact'] = ListContact::where('userEmail', $this->getUser('email') )->get();
        
        return view('/Home/index', $data);
    }


    public function setting()
    {
        return view('/Home/setting');
    }
    

    
    
}