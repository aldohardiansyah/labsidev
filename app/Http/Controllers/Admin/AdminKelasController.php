<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Jurusan;
use App\Kelas;

class AdminKelasController extends Controller
{


    public function index()
    {
        $data=Kelas::with('jurusan')->get();
        $datajurusam=Jurusan::get();
        dd($data);
        return view('admin.kelas.kelas');
    }

    public function add_jurusan(Request $request)
    {


    }



}
