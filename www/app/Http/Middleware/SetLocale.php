<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SetLocale
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
        $user = Auth::user();
        if ($user) {
            if ($user->locale) {

                app()->setLocale($user->locale);
            } else {
                $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
                $user->locale = $locale; // if someone has better
                $user->save();
                app()->setLocale($locale);
            }
        } else {
            app()->setLocale(substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2));
        }
        return $next($request);
    }
}
