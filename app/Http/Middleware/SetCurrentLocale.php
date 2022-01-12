<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetCurrentLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->missing('locale')) {
            $request->session()->put('locale', config('app.locale'));
        }

        app()->setLocale($request->session()->get('locale'));

        return $next($request);
    }
}
