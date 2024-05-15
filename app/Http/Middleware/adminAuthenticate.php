<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class adminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Session::get('admin_user'));
        if (!Session::has('admin_user')) {
            return redirect()->route('libraryAdminLogin')->with('error', 'You must be logged in to access this page.');
        } else {
            return $next($request);
        }
    }
}
