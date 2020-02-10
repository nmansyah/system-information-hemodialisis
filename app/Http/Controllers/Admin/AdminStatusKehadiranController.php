<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kehadiran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStatusKehadiranController extends Controller
{
    public function index(){
        $model = Kehadiran::all();
        dd($model);
    }
}
