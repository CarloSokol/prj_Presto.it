<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsRevisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_revisor) 
        {
            return $next($request);
        }

    return redirect('/')->with('access.denied', 'Attenzione! \n Solo i revisori hanno accesso a questa page, Puoi lavorare con noi inviando la tua candidatura!');
    }
}
