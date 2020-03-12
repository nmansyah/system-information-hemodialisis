<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class FetchPatientSession extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($patient_id)
    {
        try {
            $patient = Pasien::findOrFail($patient_id);
            $sessions = [
                $patient->hari1.' | '.$patient->sesi1,
                $patient->hari2.' | '.$patient->sesi2,
                $patient->hari3.' | '.$patient->sesi3
            ];
            return response()->json($sessions, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
