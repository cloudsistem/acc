<?php

namespace App\Http\Middleware;

use Closure;
use App\Model;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
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
        $user_id = $request->session()->get('usuarios');
        $student = Model\User::where('id',$user_id)->limit(1);
        return (Auth::user()->isAdmin());
        if (Auth::check() && Auth::user()->isAdmin())
        {
            return $next($request);
        }
        else{
            return Response()->view('errors/401');
        }
    }
}
