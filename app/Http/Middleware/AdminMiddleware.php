<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

use Closure;

class AdminMiddleware
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
        if ($request->user() && $request->user()->role != 3)
        {
            return Response::json((view('unauthorized')->with('role', 'ADMIN')));
        }
        return $next($request);
    }
}
