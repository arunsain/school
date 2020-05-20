<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
         // dd($guard);
        if (Auth::guard($guard)->check()) {
            //return redirect('/home');
//dd($guard);

              if($guard == 'admin'){
                return redirect('/admin/dashboard');
            }
              if($guard == 'teacher'){
                return redirect('/teacher/dashboard');
            }

             if($guard == 'student'){
                return redirect('/student/dashboard');
            }






        }

        return $next($request);
    }
}
