<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

//        dd(Auth::user()->role_id);

        foreach ($guards as $guard) {

            if (Auth::guard($guard)->check()) {

//                dd(Auth::guard($guard)->check());
                $url = '/';
                switch (Auth::user()->role_id) {
                    case 1:
                        $url = '/admin';
                        break;
                    case 2:
                        $url = '/lawyer';
                        break;
                    case 3:
                        $url = '/client';
                        break;
                    default:
                        $url;
                        break;
                }
                return redirect($url);
            }
        }

        return $next($request);
    }
}
