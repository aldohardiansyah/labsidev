<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Semester;

class AdminInformasiController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('admin\info');
    }



}
