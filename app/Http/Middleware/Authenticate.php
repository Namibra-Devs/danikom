<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected function redirectTo($request)
    {
        // Check if the request does not expect a JSON response
        if (! $request->expectsJson()) {
            // Check if the request URI matches the 'admin' or 'admin/*' pattern
            if (\Request::is('admin') || \Request::is('admin/*')) {
                // Redirect to the 'admin.login' route if in the admin section
                return route('admin.login');
            } else {
                // Redirect to the 'user.login' route if not in the admin section
                return route('user.login');
            }
        }
    }
}
