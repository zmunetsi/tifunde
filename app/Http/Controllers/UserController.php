<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function dashboard()
    {
        
        $coaches = \App\Coach::where('role_id', 3)
               ->orderBy('name')
               ->take(10)
               ->get();
        return view('user.dashboard', compact('coaches'));
    
    }
}
