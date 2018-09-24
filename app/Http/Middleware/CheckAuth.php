<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckAuth
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
        if(!(Auth::check()))
        {
            $previus = 'http://localhost/spectra-forum/public/forum/new_entry';
            return redirect()->route('log')->with(['previus' => $previus]);
        }
        
        return $next($request);
    }
}
