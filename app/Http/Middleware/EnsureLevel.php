<?php

namespace App\Http\Middleware;

use Closure;

class EnsureLevel
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
        if (!$request->session()->has('user_mode')) {
            $user = $request->user();
            $request->session()->put('user_mode', $user->type);
        }

        return $next($request);
    }
}
