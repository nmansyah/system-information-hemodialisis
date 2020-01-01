<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Admin as Middleware;

use Closure;
use Auth;
use App\Models\User;

class Pegawai
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
        if (Auth::check() && Auth::user()->isPegawai()) {
            return $next($request);
        } else {
            return redirect('/dok/indexDokter');
        }
    }
}
