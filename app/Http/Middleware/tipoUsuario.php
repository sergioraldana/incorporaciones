<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class tipoUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasRole('estudiante')){

        }

        return $next($request);
    }
}
