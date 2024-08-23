<?php

namespace App\Http\Middleware;

use Closure;

class SetLfmPath
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(config('filesystems.disks.public.url') != url('/') . '/assets/lfm') {
            config(['filesystems.disks.public.url' => url('/') . '/assets/lfm']);
        }
        return $next($request);
    }
}
