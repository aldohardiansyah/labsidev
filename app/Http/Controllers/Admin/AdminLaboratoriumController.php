<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;

class AdminLaboratoriumController extends Controller
{


    public function index()
    {
        return view('admin.laboratorium.lab');
    }



}
