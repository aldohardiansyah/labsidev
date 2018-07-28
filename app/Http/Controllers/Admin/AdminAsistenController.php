<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Asisten;
use App\User;

class AdminAsistenController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data = Asisten::where('status', 1)->orderBy('nama_lengkap')->get();
        return view('admin.asisten.asisten',get_defined_vars());
    }


    public function detail($id)
    {
        $data = Asisten::where('id', $id)->first();
        return view('admin.asisten.asisten_detail',get_defined_vars());
    }

    public function edit(Request $request)
    {
        $id = $request['id'];
        $nama = $request['nama_lengkap'];
        $jabatan = $request['jabatan'];
        Asisten::where('id',$id)->update(['jabatan' => $request['jabatan']]);
        return redirect()->route('admin_asisten')->with('status', 'Update Data Berhasil, '. strtoupper($nama) .' sekarang adalah '. strtoupper($jabatan));
    }

    public function delete(Request $request)
    {
        $id = $request['iddata'];
        $idlogin = Asisten::where('id',$id)->first();
        Asisten::where('id',$id)->delete();
        User::where('id', $idlogin->id_user)->delete();

        return redirect()->route('admin_asisten')->with('status', 'Data Berhasil Dihapus');
    }


}
