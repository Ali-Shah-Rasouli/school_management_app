<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
      return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $users= User::all();
       return view('users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(['name'=> 'required|min:3|max:32', 'email'=>'email|required', 'password'=>'required|min:6']);
        User::create(['name'=>$request->name, 'email'=>$request->email,'password'=>hash()::make($request->password) ]);
        return redirect()->route('users.index')->with('success', ' user added successfully !');
    }

    /**
     * Display the specified resource.
     */
   public function show(string $id)
{
    $users = User::findOrFail($id); // Find user by ID or throw 404
    return view('users.show', compact('users'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
