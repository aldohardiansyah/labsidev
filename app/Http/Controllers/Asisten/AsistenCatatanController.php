<?php

namespace App\Http\Controllers\Asisten;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsistenCatatanController extends Controller
{


    public function index()
    {
        return view('asisten\catatan');
    }



}
