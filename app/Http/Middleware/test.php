<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $ip = $request->ip();
        //dd($ip);
       if($ip == '1127.0.0.1'){
           throw new Exception("Your address ip ");
        }
        return $next($request);
    }
}
