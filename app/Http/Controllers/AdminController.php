<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function index()
    {
        
        if (Gate::denies('access-admin'))
        {
            abort(403, 'Unauthorized action.');
        } else {
        
        return view('admin.dashboard');}
    }


    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'admin', 
        ]);   
            return redirect()->route('admin.dashboard');
    }

    public function users()
    {
        
        $users = User::all(); 

        return view('admin.users', compact('users'));
    }

 
}
