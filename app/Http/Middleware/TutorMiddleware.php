<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

use Closure;

class TutorMiddleware
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
        if ($request->user() && $request->user()->role != 2)
        {
        return new Response(view('unauthorized')->with('role', 'TUTOR'));
        }
        return $next($request);
    }
}
