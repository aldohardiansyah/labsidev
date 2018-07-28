@extends('templates/template')
@section('title', 'Jadwal Praktikum')

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
                <h4><center> Jadwal Praktikum </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <button type="button" class="btn btn-outline-primary">Tambah Jadwal Asisten</button>
        </div>
        <div class="col-lg-6"></div> <!--separatorbusway-->
        <div class="col-lg-3">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" placeholder="Cari/Sortir Data" type="text" id="cari">
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
                      <th scope="col" width="10%">Kelas</th>
                      <th scope="col">Kampus</th>
                      <th scope="col">Hari</th>
                      <th scope="col">Shift</th>
                      <th scope="col">Jam</th>
                      <th scope="col">Laboratorium</th>
                      <th scope="col">Kode Praktikum</th>
                      <th scope="col">Mata Kuliah</th>
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                    <tr>
                      <td>1</td>
                      <td>4KA01</td>
                      <td>Depok</td>
                      <td>Senin</td>
                      <td>1</td>
                      <td>07.30-09.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td>Pemrograman Berbasis Web</td>
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
                      <td>4KA02</td>
                      <td>Depok</td>
                      <td>Senin</td>
                      <td>2</td>
                      <td>09.30-11.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td>Pemrograman Berbasis Web</td>
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
                      <td>3</td>
                      <td>4KA03</td>
                      <td>Depok</td>
                      <td>Senin</td>
                      <td>3</td>
                      <td>11.30-13.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td>Pemrograman Berbasis Web</td>
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
                      <td>4</td>
                      <td>4KA04</td>
                      <td>Depok</td>
                      <td>Senin</td>
                      <td>4</td>
                      <td>13.30-15.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td>Pemrograman Berbasis Web</td>
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
                      <td>5</td>
                      <td>4KA05</td>
                      <td>Depok</td>
                      <td>Senin</td>
                      <td>5</td>
                      <td>15.30-17.30</td>
                      <td>Lab H408</td>
                      <td>PBW</td>
                      <td>Pemrograman Berbasis Web</td>
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
