<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
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
