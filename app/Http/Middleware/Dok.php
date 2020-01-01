<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Admin as Middleware;

use Closure;
use Auth;
use App\Models\User;

class Dok
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
        if (Auth::check() && Auth::user()->isDok()) {
            return $next($request);
          }else {
            return redirect('/admin/indexAdmin');
          }
    }
}
