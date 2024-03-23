<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth facade

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the 'admin' usertype
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return $next($request);
        }

        // If not, redirect or return an error response
        return redirect()->route('login'); // You can customize this to your needs
    }
}
