<?php

namespace App\Http\Middleware;

use Closure;
use Flash;
class Auth
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

        if (auth()->guest()) {
            //flash("Vous devez être connecté pour voir cette page.")->error();

            return redirect('/loginRe');
        }
        return $next($request);
    }
}
