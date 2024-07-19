<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountUnlockController extends Controller
{
    public function unlock($token)
    {

        $user = User::where('unlock_token', $token)->first();

        if ($user) {
            
        
            $user->update(['account_locked' => false, 'unlock_token' => null]);
        $user->save();
        return redirect('/login')->with('success', 'Your account has been successfully unlocked. You can log in now.');
    } 
    
    
    abort(404, 'Invalid or Expired Token');
    }

}

