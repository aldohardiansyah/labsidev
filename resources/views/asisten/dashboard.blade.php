@extends('templates/template')
@section('title', 'Dashboard Asisten')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class=" row mt-5">

        <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header"><center><strong>Laboratorium Sistem Informasi</strong></center></div>
              <div class="card-body" align="center">
                  <?php $ava=Auth::user()->ava ?>
                  <img class="rounded float-center ml-4 form-group" alt="" width="150px" src="{{asset('storage/public/uploads/'.$ava)}}">
                  <h3 class="mt-3">{{$data->nama_lengkap}}</h3>
                  <h5 class="mt-2">{{$data->jabatan}}</h5>
                  <hr>
                  <p>http://github.com/gitahardiansyah</p>
                  <hr>
                  <div class="row">
                      <div class="col-sm-2" align="center">
                          <i class="fa fa-home fa-1x"></i>
                      </div>
                      <div class="col-sm-10 ">
                          <p align="left">{{$data->alamat}}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-2" align="center">
                          <i class="fa fa-phone fa-1x"></i>
                      </div>
                      <div class="col-sm-10 ">
                          <p align="left">{{$data->no_tlp}}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-2" align="center">
                          <i class="fa fa-envelope-open  fa-1x"></i>
                      </div>
                      <div class="col-sm-10 ">
                          <p align="left">{{$data->email}}</p>
                      </div>
                  </div>

                  <hr>
                  <p><a class="btn btn-secondary" href="#" role="button">Lihat Detail &raquo;</a></p>
              </div>
            </div>
        </div>

        <div class="col-lg-8">
            <hr>
            <h6 class=""><center><strong>Informasi</strong></center></h6>
            <div class="row">
                <div class="col-sm-6 mb-2">
                  <div class="card card-body">
                    <h5 class="card-title">Daftar Ulang Asisten PTA 2018/2019</h5>
                    <p class="card-subtitle mb-2 text-muted">13 Juli 2018</p>
                    <p class="card-text">Daftar Ulang Asisten Sudah di Buka Silahkan Mendaftar di link Berikut</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-2">
                  <div class="card card-body">
                    <h5 class="card-title">Laporan Praktikum ATA 2017/2018</h5>
                    <p class="card-subtitle mb-2 text-muted">10 Juli 2018</p>
                    <p class="card-text">Kepada Ketua Asisten yang praktikumnya selesai harap segera kumpulkan Laporan</p>
                  </div>
                </div>
            </div>

            <hr>
            <h6 class=""><center><strong>Jadwal Bertugas</strong></center></h6>
            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr  class="table-light table-active" align="center">
                      <th scope="col" width="5%">No.</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col" width="10%">Kelas</th>
                      <th scope="col">Hari</th>
                      <th scope="col">Shift</th>
                      <th scope="col">Jam</th>
                      <th scope="col">Laboratorium</th>
                      <th scope="col">Praktikum</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody  id="isi">
                    <tr>
                      <td>1</td>
                      <td>PJ</td>
                      <td>4KA01</td>
                      <td>Senin</td>
                      <td>1</td>
                      <td>07.30-09.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Ketua Asisten</td>
                      <td>4KA01</td>
                      <td>Senin</td>
                      <td>1</td>
                      <td>07.30-09.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Asisten</td>
                      <td>4KA01</td>
                      <td>Senin</td>
                      <td>1</td>
                      <td>07.30-09.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Asisten</td>
                      <td>4KA01</td>
                      <td>Senin</td>
                      <td>1</td>
                      <td>07.30-09.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                      </td>
                    </tr>

                  </tbody>
                </table>
            </div>

        <hr>
        <div class="row">
            <div class="col-md-6">
                <p class="text-muted"><small>Daftar Ulang Asisten</small></p>
            </div>
            <div class="col-md-6">
                <p class="text-muted" align="right"><small>Ajukan Surat Resign</small></p>
            </div>
        </div>






        </div>

    </div>


</div>
<!-- /.container -->

@endsection
