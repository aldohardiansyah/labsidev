<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Jadwalasisten;
use App\Jadwalpraktikum;
use App\Isianjadwalasisten;


class AdminJadwalAsistenController extends Controller
{


    public function index()
    {
        $data = Jadwalasisten::with('jadwalpraktikum')->with('asisten')->orderBy('id_jadwalpraktikum')->get();
        return view('admin.jadwalasisten.jadwalasisten',get_defined_vars());
    }

    public function add()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('semester',$semesteraktif->kode_semester)->with('praktikum')->with('kelas')->with('laboratorium')
            ->join('kelas','kelas.id','=','jadwal_praktikum.id_kelas')
            ->select('jadwal_praktikum.*') // Avoid selecting everything from the stocks table
            ->orderBy('kelas.kelas', 'ASC')
            ->get();
        return view('admin.jadwalasisten.jadwalasisten_add', get_defined_vars());
    }

    public function add_detail1($id)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('jadwal_praktikum.id',$id)->first();
        $dataasisten = Isianjadwalasisten::where($data->hari,'%'.$data->shift.'%')->get();
        return view('admin.jadwalasisten.jadwalasisten_add_detail1', get_defined_vars());
    }

    public function add_detail2($id)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('id',$id)->first();
        $hari = strtolower($data->hari);
        $shift = '%2%';
        $dataasisten = Isianjadwalasisten::where($hari,$shift)->get();
        dd($hari);
        return view('admin.jadwalasisten.jadwalasisten_add_detail2', get_defined_vars());
    }



}
