<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Auth
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
        $path=$request->path();
        if(($path=="in" || $path=="register") && Session::get('user'))
        {
            return redirect('/');
        }

        else if(($path!="in" && !Session::get('user')) && ($path!="register" && !Session::get('user')))
        {
            return redirect('/in');
        }
        
        return $next($request);
    }
}
