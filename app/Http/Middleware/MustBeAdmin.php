<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MustBeAdmin
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
        $user=$request->user();
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if($user&&$user->status=='admin' or $user&&$user->status=='superadmin'){
            return $next($request);
        }
        else{
            redirect()->to(abort(403));
        }
        
        
    }
}
