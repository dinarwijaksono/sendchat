<?php

namespace App\Http\Controllers;

use App\Models\ListContact;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;



class Contact_controller extends Controller
{

    public function getUser($data)
    {
        return auth()->user()[$data];
    }
    
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('Contact/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required'
        ]);

        $users = collect(User::where('email', $data['email'])->get());

        if ($users->isEmpty())
        {
            return back()->with('addError', "User dengan email $request->email tidak ditemukan.");
        }

        if ($data['email'] === auth()->user()->email  )
        {
            return back()->with('addError', "Email yang anda input adalah email anda sendiri.");
        }
        
        $email = collect(User::where('email', $data['email'])->get())->first();

        $input = [
            'userEmail' => $this->getUser('email'),
            'user_id' => $email->id
        ];

        ListContact::create($input);
        
        return back()->with('addIsSuccessfully', "Kontak berhasil di tambahkan.");;
        
    }

    
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}