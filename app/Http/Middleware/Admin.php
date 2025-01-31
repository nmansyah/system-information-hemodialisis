<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Admin as Middleware;

use Closure;
use Auth;
use App\Models\User;

class Admin
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
        // memiliki 2 kondisi untuk mengecek apakah benar admin
        // 1. mengecek apakah sudah ter Authenticate
        // 2. mengecek apakah user admin dengan cara memanggil function
        //     "isAdmin()" dari "model user.php"
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        } else {
            return redirect('/pegawai/indexPegawai');
        }

        // bila mau ditampilkan pesan error
        // throw new \Exception("acces denied", 1);

    }
}
