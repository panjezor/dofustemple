<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //On Controller stage this needs to be done to perform the locale assignment.
        $this->middleware(function ($request, $next) {
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
        });
    }
}
