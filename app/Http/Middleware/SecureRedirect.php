<?php

namespace Walker\Http\Middleware;

use Closure;

class SecureRedirect
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
        if (!$request->secure()&&env('APP_HTTPS')=='true') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
