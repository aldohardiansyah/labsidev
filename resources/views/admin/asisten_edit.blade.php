<div class="modal fade" id="modal-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Praktikum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

          <div class="row">
              <form method="POST" action="#">
                  @csrf
                    <div class="form-group row"><!--Separator Busway-->
                        <div class="col-sm-2"></div>
                      <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Nama Lengkap</strong></label>
                      <div class="col-sm-5">
                          <input class="form-control" placeholder="Masukan Nama Lengap"  name="nama_lengkap" required>
                      </div>
                    </div><!--Busway Separator-->
                    <div class="form-group row"><!--Separator Busway-->
                        <div class="col-sm-2"></div>
                      <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Jabatan</strong></label>
                      <div class="col-sm-5">
                          <select class="" name="">

                          </select>
                      </div>
                    </div><!--Busway Separator-->

                    <hr class="mt-5">
                    <center>
                        <small id="fileHelp" class="form-text text-muted">Periksa kembali data anda sebelum submit formulir, <strong>formulir yang telah disubmit tidak dapat diubah.</strong></small>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
                    </center>
                </form>
              </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
