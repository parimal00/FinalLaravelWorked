<?php

namespace App\Http\Middleware;

use Closure;

class hey
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
        if($request->age && $request->age>10){
            dd($request->all());
        }
        return $next($request);
    }
}
