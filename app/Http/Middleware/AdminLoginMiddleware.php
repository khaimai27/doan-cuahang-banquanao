<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            return $next($request);
        }
        return redirect()->route('dang-nhap');
    //    $userId=Auth::phan_quyen_id();
    //    if($userId!=1)
    //    {
    //     return view('layout');
    //    }
    //    return $next($userId);
    }
}
