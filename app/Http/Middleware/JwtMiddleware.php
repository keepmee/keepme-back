<?php

namespace App\Http\Middleware;

use Closure;

class JwtMiddleware extends \Tymon\JWTAuth\Http\Middleware\Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (strtoupper(config('app.env')) === 'TEST')
            return $next($request);
        return parent::handle($request, $next);
    }
}
