@extends('templates/template')
@section('title', 'Beranda')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class=" row mt-5">

        <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header"><center><strong>Laboratorium Sistem Informasi</strong></center></div>
              <div class="card-body" align="center">
                  <img class="rounded float-center ml-4 form-group" alt="" width="150px" src="{{asset('storage/public/uploads/'. $data->foto)}}">
                  <h3 class="mt-3">{{$data->nama_lengkap}}</h3>
                  <h5 class="mt-2">{{$data->jabatan}}</h5>
                  <hr>
                  <p><a href="">http://github.com/gitahardiansyah</a></p>
                  <p><a href="">http://gitasavitri.blogspot.com</a></p>
              </div>
            </div>
        </div>

        <div class="col-lg-8">

            <div class="card mb-3">
              <div class="card-header"><center><strong>Informasi Dasar</strong></center></div>
              <div class="card-body row" >
                  <div class="col-lg-6">
                      <p> <strong>Nama Lengkap : </strong> {{$data->nama_lengkap}}</p>
                      <p> <strong>NPM : </strong> {{$data->npm}}</p>
                      <p> <strong>Kelas : </strong> {{$data->kelas}} </p>
                      <p> <strong>IPK : </strong> {{$data->ipk}} </p>
                  </div>
                  <div class="col-lg-6">
                      <p> <strong>Periode Awal Bertugas : </strong> {{$data->semester}}</p>
                      <p> <strong>Jabatan : </strong> {{$data->jabatan}}</p>
                  </div>
              </div>

              <div class="card card-header"><center><strong>Informasi Pribadi</strong></center></div>
              <div class="card-body row" >
                  <div class="col-lg-10">
                      <p> <strong>Alamat Tinggal : </strong> Komplek Kejaksaan Agung Blok E17 Pasar Minggu </p>
                      <p> <strong>No. Telp : </strong> 085888114229 </p>
                      <p> <strong>Alamat Email : </strong> GitaHardiansyah@gmail.com </p>
                      <p> <strong>Skills : </strong> Web Development (HTML, CSS, PHP, SQL), Laravel, Code Igniter, </p>
                  </div>
                  <div class="col-lg-2">
                      <p><a href="#">CV</a><p>
                      <p><a href="#">Portofolio</a></p>
                  </div>
              </div>
            </div>

            <div align="center">
                 <p><a class="btn btn-primary"href="{{route('admin_asisten')}}" role="button"> Kembali</a></p>
            </div>

        </div>

    </div>


</div>
<!-- /.container -->

@endsection
