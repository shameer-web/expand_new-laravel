<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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

         if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        if (Auth::user()->role == 1) {
           return $next($request);

        }
        
        
        if (Auth::user()->role == 2) {
             return redirect()->route('officestaff.index');
        }

         if (Auth::user()->role == 3) {
             return redirect()->route('technicianstaff.index');
        }

         if (Auth::user()->role == 4) {
             return redirect()->route('collectionagent.index');
        }
        
        
        
        // return $next($request);




        //return $next($request);
    }
}
