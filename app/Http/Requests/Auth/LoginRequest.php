<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited(): void
    {
        $user = User::where('email', $this->email)->first();

        if (!$user) {
            return;
        }

        if ($user->account_locked) {
            throw ValidationException::withMessages([
                'email' => 'Your account has been blocked. Submit an e-mail clicking in the buttom above',
            ]);
        }

        $user->failed_login_attempts += 1;
        $user->save();

        if ($user->failed_login_attempts >= 7) {

            $user->account_locked = 1;
            $user->failed_login_attempts = 0;
            $user->save();
            event(new Lockout($this));
    
            $remainingTime = now()->diffInMinutes($user->updated_at->addMinutes(30));
    


        }
    }


    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('email')).'|'.$this->ip());
    }
}
