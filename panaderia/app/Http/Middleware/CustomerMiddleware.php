<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role=='cliente'){
            return $next($request);
            return redirect('/productos');

        }
        //return $next($request);
    }
     /*
    public function handle(Request $request, Closure $next, $role)
    {
    if(! $request->user()->hasRole($role)){

        return redirect('/home');
        return $next($request);

        }
    }*/
}
