<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pasien;
use App\Models\Kehadiran_Pasien;
use App\Models\Pasien_Meninggal;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {    

      $now = Carbon::now();
      $year = $now->year;
      for($i=0; $i<3; $i++){
        $years[] = $year;
        $year = $year-1;
      }

      $meninggal = DB::table('pasien_meninggals')->whereYear('created_at', '=', $years[2])->get();
      $meninggal1 = DB::table('pasien_meninggals')->whereYear('created_at', '=', $years[1])->get();
      $meninggal2 = DB::table('pasien_meninggals')->whereYear('created_at', '=', $years[0])->get();

      if($meninggal1->count() > 0){
        $meninggal1 = $meninggal1->count();
      } else {
        $meninggal1 = 0;
      }

      if($meninggal2->count() > 0){
        $meninggal2 = $meninggal2->count();
      } else {
        $meninggal2 = 0;
      }

      $meninggal = $meninggal->count();

      $traveling = DB::table('pasien_travelings')->whereYear('created_at', '=', $years[2])->get();
      $traveling1 = DB::table('pasien_travelings')->whereYear('created_at', '=', $years[1])->get();
      $traveling2 = DB::table('pasien_travelings')->whereYear('created_at', '=', $years[0])->get();

      if($traveling1->count() > 0){
        $traveling1 = $traveling1->count();
      } else {
        $traveling1 = 0;
      }

      if($traveling2->count() > 0){
        $traveling2 = $traveling2->count();
      } else {
        $traveling2 = 0;
      }

      $traveling = $traveling->count();

      $rawatinap = DB::table('pasien_rawatinaps')->whereYear('created_at', '=', $years[2])->get();
      $rawatinap1 = DB::table('pasien_rawatinaps')->whereYear('created_at', '=', $years[1])->get();
      $rawatinap2 = DB::table('pasien_rawatinaps')->whereYear('created_at', '=', $years[0])->get();

      if($rawatinap1->count() > 0){
        $rawatinap1 = $rawatinap1->count();
      } else {
        $rawatinap1 = 0;
      }

      if($rawatinap2->count() > 0){
        $rawatinap2 = $rawatinap2->count();
      } else {
        $rawatinap2 = 0;
      }

      $rawatinap = $rawatinap->count();
      

      return view('admin/dashboard',[
        'years' => $years,
        'meninggal' => $meninggal,
        'meninggal1' => $meninggal1,
        'meninggal2' => $meninggal2,
        'traveling' => $traveling,
        'traveling1' => $traveling1,
        'traveling2' => $traveling2,
        'rawatinap' => $rawatinap,
        'rawatinap1' => $rawatinap1,
        'rawatinap2' => $rawatinap2        
      ]);
      
    }
}
