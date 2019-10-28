<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use JWTAuth;

class Admin
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
        $user = JWTAuth::parseToken()->authenticate();
        if($user && $user->isAdmin()){
            return $next($request);
        } else {
            return Response::json(['error' => 'Not authenticated!!!']);
        }
    }
}
