<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserTypeTeacher
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
        if($request->session()->get('type') != "teacher"){
            return redirect()->route('login.index');
        }
        return $next($request);
    }
}
