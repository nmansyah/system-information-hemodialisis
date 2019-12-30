<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function index()
    {
        return view('pegawai/indexPegawai');
    }
}
