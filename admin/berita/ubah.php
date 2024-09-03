<?php
// include "./koneksi.php";
$id_berita = $_GET['id_berita'];
$ubah = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
$data = mysqli_fetch_array($ubah);
?>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class=" mb-0 text-gray-800">Ubah Data berita</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Data berita</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data berita</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data berita</h6>
                    <a href="?page=berita/index" class="btn btn-primary"><i
                            class="fas fa-arrow-left mr-2"></i>Kembali</a>

                </div>
                <div class="card-body">
                    <form method="POST" action="berita/proses_ubah.php" enctype="multipart/form-data">
                        <div class="box-body">
                            <input type="hidden" name="id_berita" value="<?= $data['id_berita']; ?>">


                            <div class="form-group">
                                <label for="id_kategori">Nama Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control" required>
                                    <option value="">Silahkan Dipilih</option>
                                    <?php
                                $kategoriData = $koneksi->query("SELECT * FROM kategori");
                                while ($kategori = $kategoriData->fetch_assoc()) {
                                ?>
                                    <option value="<?= $kategori['id_kategori'] ?>"
                                        <?= $kategori['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>>
                                        <?= $kategori['nama_kategori'] ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="judul_berita">Judul Berita</label>
                                <input type="text" name="judul_berita" id="judul_berita" class="form-control"
                                    placeholder="Judul Berita" value="<?= $data['judul_berita']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berita">Tanggal Berita</label>
                                <input type="date" name="tgl_berita" id="tgl_berita" class="form-control"
                                    placeholder="Tanggal Berita" value="<?= $data['tgl_berita']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="isi_berita">Isi Berita</label>
                                <textarea name="isi_berita" class="form-control" cols="100"
                                    rows="10"><?= $data['isi_berita'] ?></textarea>
                            </div>



                            <div class="form-group">
                                <label for="gambar_berita">Gambar Berita:</label>
                                <input type="file" name="gambar_berita" id="gambar_berita" class="form-control-file">
                                <?php if ($data['gambar_berita']): ?>
                                <img src="berita/uploads/<?= $data['gambar_berita']?>" alt="Foto Lama"
                                    class="img-fluid mt-2" style="max-width: 200px;">
                                <?php endif; ?>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" title="Simpan Data">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>


    </div>
    <!--Row-->



</div>
<!---Container Fluid-->