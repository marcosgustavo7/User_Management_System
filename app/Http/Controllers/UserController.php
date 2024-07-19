<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountUnlockEmail;

class UserController extends Controller
{
    public function index()
    {
         $users = User::all();
        return view('admin.dashboard',compact('users'));
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
    }


    public function unlock(User $user)
    {
        $user->update(['account_locked' => false]);
        return redirect()->route('admin.dashboard')->with('success', 'User account unlocked successfully');
    }

    public function sendUnlockEmail(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        $token = sha1(time());

     
        $user->unlock_token = $token;
        $user->save();

        
        Mail::to($user->email)->send(new AccountUnlockEmail($user, $token));

        return back()->with('success', 'An e-mail was sent with instructions to unlock account.');
    }


}
