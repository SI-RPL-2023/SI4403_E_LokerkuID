<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->level == 2){
                return $next($request);
            }elseif(Auth::user()->level != 1){
                return $next($request);
            }elseif(Auth::user()->level != 0){
                return $next($request);
            }else{
                return redirect('/');
            }
        }else{
            return redirect('/login');
        }
    }
}
