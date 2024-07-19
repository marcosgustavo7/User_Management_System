<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

class AdminAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if( (Auth::check() && Auth::user()->role === 'admin'))
        {
            return $next($request);
        } else
        {
        abort(403, 'Unauthorized action.');
        }

        
    }
}

