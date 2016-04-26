<?php

namespace App\Http\Middleware;

use Closure;
use App\Model;
use Session;

class AuthStudent
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
        $student = Model\Course::where('user_id',$user_id)->limit(1);
        if(!isset($student->user_id)){
            return $next($request);
        }
        else{
            return Response()->view('errors/401');
        }
    }
}
