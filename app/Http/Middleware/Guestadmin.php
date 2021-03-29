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
        if (!$request->session()->has('admin_id')) return redirect('admin/login');  
        return $response;
    }
}
