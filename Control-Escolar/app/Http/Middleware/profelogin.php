<?php

namespace App\Http\Middleware;

use Closure;

class profelogin
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
      if(session('rol')=='prof'){

        return $next($request);
      }
      return redirect()->route('start');
    }
}
