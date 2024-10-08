<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckEmployerRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role === 'employer') {
            //            dd(Auth::user());

            return $next($request);
        }

        return redirect('/')->with('failed', 'You do not have access to this section.');
    }
}
