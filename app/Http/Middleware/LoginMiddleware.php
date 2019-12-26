<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class LoginMiddleware
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
        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $username)->where('password', $password)->first();
        
        if ($user) {
            return redirect('/student');
        }
        else {
            return redirect('/login');
        }

        return $next($request);
    }
}
