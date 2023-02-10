<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaM;
use App\Http\Controllers\Controller;
use Exception;

class SiswaC extends Controller
{
   function index(){
    $siswa = SiswaM::all();
    return response()->json($siswa);
   }
}

