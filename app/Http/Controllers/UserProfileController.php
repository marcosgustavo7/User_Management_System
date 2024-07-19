<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
        /**
     * 
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = auth()->user();
        
        return view('user/interface', compact('user'));
    } 
}
