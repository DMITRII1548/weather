<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Access
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user() === null) {
            return redirect()->route('login');
        } else if (auth()->user()->status !== 'admin') {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
