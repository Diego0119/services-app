<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = null)
    {

        if (!auth()->check()) { // verifica si el usuario esta autenticado
            return redirect('/');
        }
        if ($role && !auth()->user()->hasRole($role)) {
            return redirect('/');
        }

        return $next($request);
    }
}
