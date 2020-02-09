<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasien_Rawatinap;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDataPasienRawatInapCheckout extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        $model = Pasien_Rawatinap::findOrFail($id);
        if (!is_null($model->check_out_time)){
            return redirect()->back()->with('alert', 'Failed to check out coz this pasien was check out');
        }
        $model->check_out_time = Carbon::now();
        if (!$model->save()){
            return redirect()->back()->with('alert', 'Failed to check out');
        }
        return redirect()->back()->withSuccess('Succeed to check out');
    }
}
