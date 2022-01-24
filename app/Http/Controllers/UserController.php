<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    // protect this route with middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        
        // if is coach
        
        if (auth()->user()->role_id == 3) {
            return view('coach.dashboard');
        }
        $coaches = \App\User::where('role_id', 3)
               ->orderBy('name')
               ->take(10)
               ->get();
        return view('user.dashboard', compact('coaches'));
    
    }
}
