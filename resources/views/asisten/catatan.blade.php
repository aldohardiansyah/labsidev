@extends('templates/template')
@section('title', 'Beranda')

@section('content')

<!-- Page Content -->
<div class="container">

    <div class=" row mt-5">

        <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header"><center><strong>Buat Catatan Baru</strong></center></div>
              <div class="card-body">
                  <form class="" action="index.html" method="post">
                      <div class="form-group">
                        <label><small>Judul Catatan</small></label>
                        <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul" type="email">
                      </div>
                      <div class="form-group">
                         <label><small>Jenis Catatan</small></label>
                         <select class="form-control" id="exampleSelect1">
                               <option>Pilih jenis Catatan</option>
                               <option>Catatan Rekap</option>
                               <option>Catatan Jaga</option>
                               <option>Catatan Lain-Lain</option>

                         </select>
                       </div>
                      <div class="form-group">
                         <label><small>Pilih Jadwal Bertugas</small></label>
                         <select class="form-control" id="exampleSelect1">
                                <option>Pilih jenis Catatan</option>
                                <option>PJ | 4KA01 | Senin | Shift 1</option>
                                <option>PJ | 4KA01 | Senin | Shift 1</option>
                                <option>PJ | 4KA01 | Senin | Shift 1</option>
                                <option>PJ | 4KA01 | Senin | Shift 1</option>
                         </select>
                       </div>
                      <div class="form-group">
                          <label><small>Isi Catatan</small></label>
                          <textarea name="editor1" id="editor1"><p></p></textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                      </div>
                      <div class="form-group">
                           <p align="center"><a class="btn btn-outline-primary"href="#" role="button">Buat Catatan</a></p>
                      </div>
                  </form>
              </div>
            </div>
        </div>

        <div class="col-lg-8">
            <hr>
            <h6 class=""><center><strong>Daftar Catatan</strong></center></h6><br>
            <div class="row mb-2">
              <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body bg-light d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"> <i class="fa fa-sticky-note fa-1x"></i> Catatan Rekap</strong>
                    <h3 class="mb-0">
                      <a class="text-dark" href="#">Rekap September</a>
                    </h3>
                    <div class="mb-1 text-muted">11 Juli 2018</div>
                    <p class="card-text mb-auto">Kelas : 4KA01 | Jabatan : Ketua | Shift 1 - 5</P>
                    <a href="#">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body bg-light d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"> <i class="fa fa-sticky-note fa-1x"></i> Catatan Rekap</strong>
                    <h3 class="mb-0">
                      <a class="text-dark" href="#">Rekap September</a>
                    </h3>
                    <div class="mb-1 text-muted">11 Juli 2018</div>
                    <p class="card-text mb-auto">Kelas : 4KA01 | Jabatan : Ketua | Shift 1 - 5</P>
                    <a href="#">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body bg-light d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"> <i class="fa fa-sticky-note fa-1x"></i> Catatan Rekap</strong>
                    <h3 class="mb-0">
                      <a class="text-dark" href="#">Rekap September</a>
                    </h3>
                    <div class="mb-1 text-muted">11 Juli 2018</div>
                    <p class="card-text mb-auto">Kelas : 4KA01 | Jabatan : Ketua | Shift 1 - 5</P>
                    <a href="#">Baca Selengkapnya</a>
                  </div>
                </div>
              </div>
          </div>
        </div>

    </div>


</div>
<!-- /.container -->

@endsection
