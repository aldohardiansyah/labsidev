<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Praktikum;
use App\Semester;

class AdminPraktikumController extends Controller
{


    public function index()
    {
        $data=Praktikum::all();
        return view('admin.praktikum.praktikum', get_defined_vars());
    }

    public function add()
    {
        // $data=Praktikum::all();
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('admin.praktikum.praktikum_add', get_defined_vars());
    }



}
