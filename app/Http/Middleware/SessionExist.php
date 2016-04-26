<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class SessionExist
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
        $ExistsSession = $request->session()->get('usuarios');
        if (isset($ExistsSession)){
            return $next($request);
        }
        else {
            return Response(view('auth/login'));
        }
    }
}
