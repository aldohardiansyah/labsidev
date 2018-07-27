@extends('templates/template')
@section('title', 'Kelas')

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
        <div class="col-lg-5">
                <h4><center> Jurusan </center></h4>
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-outline-primary">Tambah Jurusan</button>
                    </div>
                    <div class="col-lg-6"></div> <!--separatorbusway-->
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered ">
                              <thead>
                                <tr  class="table-primary table-active" align="center">
                                  <th scope="col" width="5%">No.</th>
                                  <th scope="col" width="5%">Kode</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col" width="20%">Proses</th>
                                </tr>
                              </thead>
                              <tbody id="isi">
                                <tr>
                                  <td>1</td>
                                  <td>KA</td>
                                  <td>Sistem Informasi</td>
                                  <td align="center">
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
        </div>

        <div class="col-lg-7">
                <h4><center> Kelas </center></h4>
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-outline-primary">Tambah Kelas</button>
                    </div>
                    <div class="col-lg-6"></div> <!--separatorbusway-->
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered ">
                              <thead>
                                <tr  class="table-primary table-active" align="center">
                                  <th scope="col" width="5%">No.</th>
                                  <th scope="col">Kelas</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Kampus</th>
                                  <th scope="col">Proses</th>
                                </tr>
                              </thead>
                              <tbody id="isi">
                                <tr>
                                  <td>1</td>
                                  <td>4KA01</td>
                                  <td>Sistem Informasi</td>
                                  <td>Depok</td>
                                  <td align="center">
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
                                  <td>4KA02</td>
                                  <td>Sistem Informasi</td>
                                  <td>Depok</td>
                                  <td align="center">
                                      <span>
                                            <button class="btn btn-success btn-xsm" type="submit"><i class="fa fa-pencil-alt"></i></button>
                                      </span>
                                      <span>
                                            <button class="btn btn-danger btn-xsm" type="submit"><i class="fa fa-trash-alt"></i></button>
                                      </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>4KA03</td>
                                  <td>Sistem Informasi</td>
                                  <td>Depok</td>
                                  <td align="center">
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
        </div>
    </div>





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
