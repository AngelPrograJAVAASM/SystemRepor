<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $type): Response
    {
        if(Auth::guard('employs')->check() && Auth::guard('employs')->user()->type != $type){

            if($type == 1){
                    return redirect('/menu');
                }
            if($type == 2){
                    return redirect('/menuEmploy');
                }
                if($type == 3){
                    return redirect('/menu');
                }
        }
        return $next($request);
    }
}
