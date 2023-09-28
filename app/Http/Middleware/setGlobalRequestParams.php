<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setGlobalRequestParams
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(app()->getLocale());
        if(!isset($request->lan)) {
            $lang = app()->getLocale();
            request()->merge(['lan' => $lang]);
            $request->attributes->set('lan', $lang);
            $request->attributes->get('lan');
        }
        // dd(request()->all());
        return $next($request);
    }
}
