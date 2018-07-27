<?php

namespace App\Http\Controllers\Asisten;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Asisten;
use Auth;

class AsistenProfileController extends Controller
{


    public function index()
    {
        $data = Asisten::where('id_user', Auth::user()->id)->first();
        return view('asisten\profile',get_defined_vars());
    }



}
