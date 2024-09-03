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

                      <a href="?page=berita/index" class="btn btn-primary"><i
                              class="fas fa-arrow-left mr-2"></i>Kembali</a>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="berita/proses_tambah.php" enctype="multipart/form-data">


                          <div class="form-group">
                              <label for="id_kategori">Nama Kategori</label>
                              <select name="id_kategori" id="id_kategori" class="form-control" required>
                                  <option value="">Silahkan Dipilih</option>
                                  <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                  <option value="<?= $data['id_kategori'] ?>">
                                      <?= $data['nama_kategori'] ?>
                                  </option>

                                  <?php } ?>
                              </select>
                          </div>

                          <div class="form-group">
                              <label for="judul_berita">Judul Berita:</label>
                              <input type="text" id="judul_berita" name="judul_berita" class="form-control" required>
                          </div>

                          <div class="form-group">
                              <label for="isi_berita">Isi Berita:</label>
                              <textarea id="isi_berita" name="isi_berita" class="form-control" rows="5"
                                  required></textarea>
                          </div>

                          <div class="form-group">
                              <label for="gambar_berita">Gambar Berita:</label>
                              <input type="file" id="gambar_berita" name="gambar_berita" class="form-control-file"
                                  required>
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