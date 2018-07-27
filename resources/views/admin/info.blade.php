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
                <h4><center> Informasi </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <button type="button" class="btn btn-outline-primary">Tambah Informasi</button>
        </div>
        <div class="col-lg-6"></div> <!--separatorbusway-->
        <div class="col-lg-3">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" placeholder="Cari Data" type="text" id="cari">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="table-responsive">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr  class="table-primary table-active" align="center">
                      <th scope="col" width="5%">No.</th>
                      <th scope="col" width="15%">Judul</th>
                      <th scope="col">Isi</th>
                      <th scope="col">Role</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                    <tr>
                      <td>1</td>
                      <td>Praktikum Pengganti 4KA22</td>
                      <td>Sehubungan dengan hari libur pada tanggal 10 Juli 2018, maka untuk praktikum pengganti kelas 4KA22 akan diadakan pada hari Kamis..</td>
                      <td>Public</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                          <span>
                                <button class="btn btn-success btn-xsm" type="submit"><i class="fa fa-pencil-alt"></i></button>
                          </span>
                          <span>
                                <button class="btn btn-danger btn-xsm" type="submit"><i class="fa fa-trash-alt"></i></button>
                          </span>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Pendaftaran Asisten Baru PTA 18/19</td>
                      <td>Telah dibuka Pendaftaran Asisten Baru Laboratorium Sistem Informasi Universitas Gunadarma, Berikut adalah kriteria asisten..</td>
                      <td>Public</td>
                      <td align="center">
                          <span>
                                <button class="btn btn-primary btn-xsm" type="submit"><i class="fa fa-eye"></i></button>
                          </span>
                          <span>
                                <button class="btn btn-success btn-xsm" type="submit"><i class="fa fa-pencil-alt"></i></button>
                          </span>
                          <span>
                                <button class="btn btn-danger btn-xsm" type="submit"><i class="fa fa-trash-alt"></i></button>
                          </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
