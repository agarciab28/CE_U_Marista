<?php

namespace App\Http\Middleware;

use Closure;

class logparalogin
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
      if(session('rol')==null){

        return $next($request);
      }
      if(session('rol')=='admin'){
        return redirect()->route('admin_home');
      }
      elseif(session('rol')=='alumno'){
        return redirect()->route('alumno_home');
      }
      elseif(session('rol')=='prof'){
        return redirect()->route('docente_home');
      }
      elseif(session('rol')=='coord'){
        return redirect()->route('coordinador_home');
      }
    }
}
