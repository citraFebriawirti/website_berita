  <!-- Container Fluid-->
  <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h5 class=" mb-0 text-gray-800">Tambah Data Kategori</h5>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Data Kategori</li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Kategori</li>
          </ol>
      </div>

      <div class="row">
          <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kategori</h6>
                      <a href="?page=kategori/index" class="btn btn-primary"><i
                              class="fas fa-arrow-left mr-2"></i>Kembali</a>
                  </div>
                  <div class="card-body">
                      <form action="kategori/proses_tambah.php" method="post">

                          <div class="form-group">
                              <label for="exampleInputPassword1">Nama Kategori</label>
                              <input type="text" class="form-control" name="nama_kategori"
                                  placeholder="masukkan nama kategori.." require>
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
              </div>


          </div>


      </div>
      <!--Row-->



  </div>
  <!---Container Fluid-->