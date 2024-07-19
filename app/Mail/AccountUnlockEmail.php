<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountUnlockEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $unlockUrl;

    public function __construct(User $user, $token)
    {
        $this->user = $user;
        $this->unlockUrl = route('account.unlock', $token);
    }

    public function build()
    {
        return $this->markdown('emails.account_unlock')
                    ->subject('Instructions to Unlock Your Account');
    }

}
