<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\AccountUnlockEmail;
use Illuminate\Support\Facades\Mail;

class AccountUnlockRequestController extends Controller
{
    public function showRequestForm()
    {
        return view('auth.account_unlock_request');
    }

    public function sendUnlockRequest(Request $request)
{    
    $user = User::where('email', $request->email)->first();
    if($user){
    $token = Str::random(60);
    
    $user->update(['unlock_token' => $token]);

    Mail::to($user)->send(new AccountUnlockEmail($user, $token));
   

    return back()->with('status', 'An e-mail was sent with instructions to unlock account.');
}
return redirect()->back()->withErrors(['email' => 'We do not found any user with this e-mail']);
}
}