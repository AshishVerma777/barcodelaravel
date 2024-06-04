<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (auth()->check()) {
        //     return $next($request);
        // }
        if (!auth()->check()) {
            // return response('Forbidden', 403);
            return $next($request);
        }
        else{

            return $next($request);}
        // Handle the case where the user is not authenticated
        // You can redirect to a login page or return a 403 forbidden response
        // return redirect()->route('login');

    }
}
