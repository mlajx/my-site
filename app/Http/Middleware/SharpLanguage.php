<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SharpLanguage
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
        app()->setlocale('pt-br');
        return $next($request);
    }
}
