<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsUser
{
    public function handle($request, Closure $next)
    {
        // Check if the authenticated user has the 'user' role
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request);
        }

        // Abort with a 403 Forbidden response if not authorized
        return abort(403, 'Access denied. Users only.');
    }
}
