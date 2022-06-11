<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkCMSCookie
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
        if(isset($_COOKIE['cookie_cms'])){
            return redirect()->route('cms.dashboard');
        }
        else{
            return $next($request);
        }
    }
}
