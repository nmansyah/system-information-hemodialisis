<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pasien;
use App\Models\Kehadiran;
use Auth;

class DataKehadiranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index($pasien_id)
    {
        $pasien = Pasien::findOrFail($pasien_id);
        $kehadiran = Kehadiran::where('pasien_id', $pasien_id)->get();
        return view('admin.Kehadiran.dataKehadiran', [
            'pasien' => $pasien,
            'kehadiran' => $kehadiran
        ]);
    }
}
