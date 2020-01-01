<?php

namespace App\Http\Controllers\Dok;

use App\Models\Dok;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class DokController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('dok');
    }

    public function index()
    {
        return view('dok/indexDokter');
    }
}
