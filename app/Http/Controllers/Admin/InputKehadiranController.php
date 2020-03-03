<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use foo\bar;
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

class InputKehadiranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index($pasien_id)
    {
        $pasien = Pasien::findOrFail($pasien_id);
        if ($pasien->is_died()) {
            return redirect()->back()->with('alert', 'Pasien telah meninggal');
        }
        if ($pasien->pasienTraveling()->exists()) {
            return redirect()->back()->with('alert', 'Pasien telah pindah');
        }
        return view('admin/Kehadiran/inputKehadiran', [
            'pasien' => $pasien,
        ]);
    }

    public function edit($pasien_id, $kehadiran_id)
    {
        $kehadiran = Kehadiran::findOrFail($kehadiran_id);
        $pasien = Pasien::findOrFail($pasien_id);
        return view('admin/Kehadiran/editKehadiran', [
            'pasien' => $pasien,
            'kehadiran' => $kehadiran
        ]);
    }

    public function store(Request $request, $pasien_id)
    {
        $kehadiran = new Kehadiran;
        $kehadiran->pasien_id = $pasien_id;
        $kehadiran->tanggal = $request->tanggal;
        $kehadiran->kehadiran = $request->kehadiran;
        $kehadiran->sesi = $request->sesi;
        $kehadiran->save();

        return redirect()
            ->route('admin.data.kehadiran', ['pasien_id' => $pasien_id])
            ->withSuccess('Kehadiran Telah Ditambahkan.');
    }

    public function delete($pasien_id, $id)
    {
        $model = Kehadiran::findOrFail($id);
        if (!$model->delete()) {
            return redirect()->back()->with('alert', 'Gagal menghapus ');
        }
        $pasien = Pasien::findOrFail($pasien_id);
        return redirect()
            ->route('admin.data.kehadiran', $pasien->id)
            ->withSuccess('Data Berhasil Dihapuskan.');
    }

    public function update(Request $request, $pasien_id, $kehadiran_id)
    {
        $kehadiran = Kehadiran::findOrFail($kehadiran_id);
        $kehadiran->tanggal = $request->tanggal;
        $kehadiran->kehadiran = $request->kehadiran;
        if (!$kehadiran->save()) {
            return redirect()->back()->with('error', 'Failed to update');
        }
        return redirect()->route('admin.data.kehadiran', $pasien_id);
    }
}
