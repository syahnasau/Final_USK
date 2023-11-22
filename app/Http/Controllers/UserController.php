<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            $request->all()
        ]);
        if($user){
            return redirect('home')->with('status', 'Success Add User');
        }
        return redirect()->back()->with('status', 'Failed Add Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.edit-user', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        if($user){
            return redirect('home')->with('status', 'Success Update User');
        }
        return redirect()->back()->with('status', 'Failed Update User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if($user){
            return redirect('home')->with('status', 'Success Delete User ');
        }
        return redirect()->back()->with('status', 'Failed Delete Data');
    }
}
