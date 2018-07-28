<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;

class AdminJadwalPraktikumController extends Controller
{


    public function index()
    {
        return view('admin.jadwalpraktikum.jadwalpraktikum');
    }



}
