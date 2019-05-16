<?php

namespace App\Http\Middleware;

use Closure;

class alumnologin
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
      if(session('rol')=='alumno'){

        return $next($request);
      }
      return redirect()->route('start');

    }
}
