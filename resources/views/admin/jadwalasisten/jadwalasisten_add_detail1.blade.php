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
                <h4><center> Tambah Data Jadwal Praktikum </center></h4>
        </div>
    </div>

    <hr>
        <div class="mt-4 mb-2">
            <div class="col-lg-12">
                <div class="card border-secondary mb-3">
                  <div class="card-header" align="center">Data Jadwal Asisten</div>
                  <div class="card-body">
                      <div class="form-group mt-3">
                      <form method="POST" action="{{ route('admin_jadwalpraktikum.insert') }}" enctype="multipart/form-data">
                          @csrf
                        <fieldset>
                            <hr>
                                <div align="center">Data Asisten</div>
                            <hr>
                            <br>
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>PJ Shift</strong></label>
                                <div class="col-sm-8">
                                    <select class="form-control selectdua select" name="pjshift" id="nama_asisten">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($dataasisten as $dataasisten1)
                                        <option value="{{$dataasisten1->id_asisten}}">{{$dataasisten1->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Ketua Asisten</strong></label>
                                <div class="col-sm-8">
                                    <select class="form-control selectdua select" name="ketuaasisten" id="nama_asisten">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($dataasisten as $dataasisten2)
                                        <option value="{{$dataasisten2->id_asisten}}">{{$dataasisten2->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Asisten 1</strong></label>
                                <div class="col-sm-8">
                                    <select class="form-control selectdua select" name="asisten1" id="nama_asisten">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($dataasisten as $dataasisten3)
                                        <option value="{{$dataasisten3->id_asisten}}">{{$dataasisten3->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->
                            <div class="form-group row"><!--Separator Busway-->
                                <div class="col-sm-1"></div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Asisten 2</strong></label>
                                <div class="col-sm-8">
                                    <select class="form-control selectdua select" name="asisten2">
                                        <option value="" disabled selected>Pilih Asisten</option>
                                    @foreach ($dataasisten as $dataasisten4)
                                        <option value="{{$dataasisten4->id_asisten}}">{{$dataasisten4->nama_lengkap}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div><!--Busway Separator-->


                            <hr class="mt-5">
                            <center>
                                <small id="fileHelp" class="form-text text-muted">Periksa kembali kelengkapan data sebelum disimpan! </small>
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
