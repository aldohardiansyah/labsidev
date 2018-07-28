<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Informasi;

class AdminInformasiController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data=Informasi::all();
        return view('admin.informasi.info',get_defined_vars());
    }

    public function add()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('admin.informasi.info_add',get_defined_vars());
    }


}
