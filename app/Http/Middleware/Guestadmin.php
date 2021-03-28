<?php

namespace App\Http\Middleware;
// use Illuminate\Http\Request;
use Closure;

class Guestadmin
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
        $response = $next($request);
        $response->header('X-XSS-Protection',"1;mode=block");
        if (!$request->session()->has('admin_id')) return redirect(route('adminlogin'));  
        return $response;
    }
}
