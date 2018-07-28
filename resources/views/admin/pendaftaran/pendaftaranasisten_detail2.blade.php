@extends('templates/template')
@section('title', 'Data Asisten')

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
                <h4><center> Data Calon Asisten </center></h4>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="card border-secondary mb-3">
              <div class="card-header" align="center">Laboratorium Sistem Informasi</div>
              <div class="card-body">
                  <div class="form-group mt-4">
                  <form>
                        <div class="form-group row"><!--Separator Busway-->
                          <div class="col-sm-4 text-center">
                              <img src="{{asset('storage/public/uploads/'.$data->foto)}}" class="rounded float-center ml-4 form-group" alt="" width="200px">
                          </div>
                          <div class="col-sm-8">
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Nama Lengkap</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->nama_lengkap}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>NPM</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->npm}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Kelas</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->kelas}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Tempat, Tanggal Lahir</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->tempat_lahir}}, {{date('d-m-Y', strtotime($data->tgl_lahir))}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>ID | No. ID</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->jenis_id}} | {{$data->no_id}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Jenis Kelamin</strong></label>
                                  <div class="col-sm-6">
                                      @if ($data->jenis_kelamin=='L')
                                      <p>Laki-laki</p>
                                      @else
                                      <p>Laki-laki</p>
                                      @endif
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Kewarganegaraan</strong></label>
                                  <div class="col-sm-6">
                                      @if ($data->kewarganegaraan=='WNI')
                                      <p>Warga Negara Indonesia</p>
                                      @else
                                      <p>Warga Negara Asing</p>
                                      @endif
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Agama</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->agama}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Alamat</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->alamat}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Email</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->email}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>No Telpon</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->no_tlp}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>IPK</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->ipk}}</p>
                                      <hr>
                                  </div>
                              </div>
                              <div class="row">
                                  <label for="staticEmail" class="col-sm-3"><strong>Skills</strong></label>
                                  <div class="col-sm-6">
                                      <p>{{$data->kemampuan}}</p>
                                      <hr>
                                  </div>
                              </div>

                          </div>
                        </div><!--Busway Separator-->

                        <br>
                        <small id="fileHelp" class="form-text text-muted">Data File Pendaftaran Asisten</small>
                        <hr>
                        <div class="form-group"><!--Separator Busway-->
                            <div class="row">
                                <div class="col-md-4" align="center">
                                    <button class="btn btn-outline-secondary btn-xsm" type="submit"
                                    onclick="location.href='#'">
                                    SURAT LAMARAN
                                    </button>
                                </div>
                                <div class="col-md-4" align="center">
                                    <button class="btn btn-outline-secondary btn-xsm" type="submit"
                                    onclick="location.href='#'">
                                    CV
                                    </button>
                                </div>
                                <div class="col-md-4" align="center">
                                    <button class="btn btn-outline-secondary btn-xsm" type="submit"
                                    onclick="location.href='#'">
                                    NILAI
                                    </button>
                                </div>
                            </div>
                        </div><!--Busway Separator-->

                        <hr>

                    </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <hr>


</div>
<!-- /.container -->



<script type="text/javascript">

    document.getElementById('cari').value = '';
    $(document).ready(function(){

        //Buat Nyari Data Tabel
         $("#cari").on("keyup", function() {
           var value = $(this).val().toLowerCase();
           $("#isi tr").filter(function() {
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
           });
         });


        });

</script>

@endsection
