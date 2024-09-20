<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        // Check if the authenticated user has the 'admin' role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Abort with a 403 Forbidden response if not authorized
        return abort(403, 'Access denied. Admins only.');
    }
}
