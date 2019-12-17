<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Rolet
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
        if(Auth::user()->role == 'teacher'){
            return $next($request);
        }else if(Auth::user()->role == 'student'){
            return redirect('/student');
        }else{
            return redirect('/login');
        }
    }
}
