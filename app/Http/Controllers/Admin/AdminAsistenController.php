<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Semester;
use App\Asisten;

class AdminAsistenController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data = Asisten::where('semester', $semesteraktif->kode_semester)->get();
        return view('admin\asisten',get_defined_vars());
    }


    public function profile($id)
    {
        $data = Asisten::where('id', $id)->first();
        return view('admin\asisten_detail',get_defined_vars());
    }


}
