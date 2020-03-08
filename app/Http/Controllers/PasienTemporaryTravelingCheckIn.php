<?php

namespace App\Http\Controllers;

use App\Models\PasienTravelSementara;
use Illuminate\Http\Request;

class PasienTemporaryTravelingCheckIn extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        try {
            $model = PasienTravelSementara::findOrFail($id);
            $model->is_active = false;
            if(!$model->save()){
                throw new \Exception('Failed to change status temporary traveling');
            }
            return redirect()->back()->with('success', 'Berhasil memperbarui status pindah pasien');
        }catch (\Exception $e){
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }
}
