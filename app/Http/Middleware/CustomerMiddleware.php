<?php

namespace App\Http\Middleware;
use Illuminate\Support\facades\Auth;

use Closure;

class CustomerMiddleware
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
       // return $next($request);
        if(Auth::user()->role === '3'){
             return $next($request);
        }
        else{
            return redirect('/home')->with('status','You are not Allowed to Acces the Customer Dashbord.!');
        }
    }
}
