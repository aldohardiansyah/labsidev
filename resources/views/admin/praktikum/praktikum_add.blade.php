@extends('templates/template')
@section('title', 'Praktikum')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class="mt-4">
        <hr>
        <div class="row">
            <!-- Navigation -->
            @include('admin/navbar')

        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-lg-12">
                <h4><center> Tambah Data Praktikum </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Form Pendaftaran Asisten Laboratorium Sistem Informasi</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                      <form method="POST" action="{{ route('pendaftaran.save') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kode Mata Kuliah</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Mata Kuliah</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Kode Praktikum</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Jurusan</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tingkat</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tanggal Mulai</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Tanggal Selesai</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Semester</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                              <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Materi</strong></label>
                              <div class="col-sm-5">
                                  <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                              </div>
                            </div><!--Busway Separator-->
                            <br>
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-2"></div>
                                <label for="staticEmail" class="col-sm-2"><strong>Surat Lamaran</strong></label>
                                <div class="col-sm-3">
                                    <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="surat">
                                    <small id="fileHelp" class="form-text text-muted"><strong> Fomat File PDF, ukuran max 1mb</strong></small>
                                </div>
                                <label for="staticEmail" class="col-sm-1"><strong>Nilai</strong></label>
                                <div class="col-sm-3">
                                  <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file" name="nilai">
                                  <small id="fileHelp" class="form-text text-muted"><strong>Fomat File PDF, ukuran max 1mb</strong></small>
                                </div>
                            </div><!--Busway Separator-->

                            <hr class="mt-5">
                            <center>
                                <small id="fileHelp" class="form-text text-muted">Periksa kembali data anda sebelum submit formulir, <strong>formulir yang telah disubmit tidak dapat diubah.</strong></small>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
                            </center>
                        </fieldset>
                        </form>
                      </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
