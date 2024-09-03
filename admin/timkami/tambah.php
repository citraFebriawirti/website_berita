  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class=" mb-0 text-gray-800">Tambah Data Tim</h5>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Data Tim</li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Tim</li>
          </ol>
      </div>

      <div class="row">
          <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Tim</h6>
                      <a href="?page=timkami/index" class="btn btn-primary"><i
                              class="fas fa-arrow-left mr-2"></i>Kembali</a>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="timkami/proses_tambah.php" enctype="multipart/form-data">


                          <div class="form-group mb-3">
                              <label for="nama_tim">Nama Tim</label>
                              <input type="text" id="nama_tim" name="nama_tim" class="form-control" required>
                          </div>

                          <div class="form-group mb-3">
                              <label for="jabatan">Jabatan</label>
                              <input type="text" id="jabatan" name="jabatan" class="form-control" required>

                          </div>

                          <div class="form-group mb-3">
                              <label for="foto">Foto</label>
                              <input type="file" id="foto" name="foto" class="form-control-file" required>
                          </div>

                          <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>
                  </div>
              </div>


          </div>


      </div>
      <!--Row-->



  </div>
  <!---Container Fluid-->