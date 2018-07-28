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
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if (session('status'))
          <div class="alert alert-dismissible alert-light">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>{{ session('status') }}<center>
          </div>
          @endif
    </div>

    <div class="row">
        <div class="col-lg-12">
                <h4><center> Praktikum </center></h4>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col-lg-3">
            <button type="button" class="btn btn-outline-primary">Tambah Data Praktikum</button>
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
                      <th scope="col" width="10%">Kode Mata Kuliah</th>
                      <th scope="col">Mata Kuliah</th>
                      <th scope="col">Kode Praktikum</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Tanggal Mulai</th>
                      <th scope="col">Tanggal Selesai</th>
                      <th scope="col">Semester</th>
                      {{-- <th scope="col">Materi</th> --}}
                      <th scope="col" width="15%">Proses</th>
                    </tr>
                  </thead>
                  <tbody id="isi">
                      <?php $no = 0;?>
                      @foreach ($data as $data)
                          <?php $no++ ;?>
                          <tr>
                            <td>{{$no}}</td>
                            <td>{{$data->kode_matkul}}</td>
                            <td>{{$data->matkul}}</td>
                            <td>{{$data->kode_praktikum}}</td>
                            <td>{{$data->tingkat}}</td>
                            <td>{{date('d-m-Y', strtotime($data->tgl_mulai))}}</td>
                            <td>{{date('d-m-Y', strtotime($data->tgl_selesai))}}</td>
                            <td>{{$data->semester}}</td>
                            {{-- <td>{{$data->materi}}</td> --}}
                            <td align="center">
                                <span>
                                    <button class="btn btn-primary btn-xsm view" type="submit"
                                    data-id="{{ $data->id }}"
                                    data-kodematkul="{{ $data->kode_matkul }}"
                                    data-matkul="{{ $data->matkul }}"
                                    data-kodepraktikum="{{ $data->kode_praktikum }}"
                                    data-jurusan="{{ $data->jurusan }}"
                                    data-tingkat="{{ $data->tingkat }}"
                                    data-tglmulai="{{ $data->tgl_mulai }}"
                                    data-tglselesai="{{ $data->tgl_selesai }}"
                                    data-semester="{{ $data->semester }}"
                                    data-materi="{{ $data->materi }}"
                                    data-toggle="modal" data-target="#modal-1">
                                    <i class="fa fa-eye"></i></button>
                                </span>
                                <span>
                                      <button class="btn btn-success btn-xsm" type="submit"><i class="fa fa-pencil-alt"></i></button>
                                </span>
                                <span>
                                      <button class="btn btn-danger btn-xsm" type="submit"><i class="fa fa-trash-alt"></i></button>
                                </span>
                            </td>
                          </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>

        </div>
    </div>
    <hr>


</div>
<!-- /.container -->


@include('admin.praktikum.praktikum_detail')
{{-- @include('admin.praktikum.praktikum_add') --}}

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

    $(document).on('click', '.view', function() {
      $('#id').val($(this).data('id'));
      $('#kodematkul').val($(this).data('kodematkul'));
      $('#matkul').val($(this).data('matkul'));
      $('#kodepraktikum').val($(this).data('kodepraktikum'));
      $('#jurusan').val($(this).data('jurusan'));
      $('#tingkat').val($(this).data('tingkat'));
      $('#tglmulai').val($(this).data('tglmulai'));
      $('#tglselesai').val($(this).data('tglselesai'));
      $('#semester').val($(this).data('semester'));
      $('#materi').val($(this).data('materi'));
    });

</script>

@endsection
