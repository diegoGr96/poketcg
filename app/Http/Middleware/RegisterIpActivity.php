<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class RegisterIpActivity
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
        if ($position = Location::get()) {
            // Successfully retrieved position.
            var_dump($position);
            die;
        } else {
            // Failed retrieving position.
        }
        return $next($request);
    }
}
