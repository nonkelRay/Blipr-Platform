<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateVenue
{
    public function handle($request, Closure $next)
    {
        /* If request does not comes from logged in venue
        then he shall be redirected to venue Login page */
        if (!Auth::guard('venue')->check()) {
            return redirect('venue/login');
        }

        return $next($request);
    }
}
