<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the "admin" role
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        // If the user is not an admin, you can redirect them to another page or show an error message
        return redirect('/')->with('error', 'Access denied. You do not have permission to access this page.');
    }
}
