<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class JadwalController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('jadwal');
    }



}
