<?php
// include "./koneksi.php";
$id_about = $_GET['id_about'];
$ubah = mysqli_query($koneksi, "SELECT * FROM about WHERE id_about='$id_about'");
$data = mysqli_fetch_array($ubah);
?>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class=" mb-0 text-gray-800">Ubah Data about</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Data about</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data about</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data about</h6>
                    <a href="?page=about/index" class="btn btn-primary"><i
                            class="fas fa-arrow-left mr-2"></i>Kembali</a>

                </div>
                <div class="card-body">
                    <form method="POST" action="about/proses_ubah.php" enctype="multipart/form-data">
                        <div class="box-body">
                            <input type="hidden" name="id_about" value="<?= $data['id_about']; ?>">



                            <div class="form-group">
                                <label for="visi_about">Visi </label>
                                <textarea name="visi_about" class="form-control" cols="100"
                                    rows="10"><?= $data['visi_about'] ?></textarea>
                            </div>



                            <div class="form-group">
                                <label for="misi_about">Misi</label>
                                <textarea name="misi_about" class="form-control" cols="100"
                                    rows="10"><?= $data['misi_about'] ?></textarea>
                            </div>



                            <div class="form-group">
                                <label for="gambar_about">Gambar about:</label>
                                <input type="file" name="gambar_about" id="gambar_about" class="form-control-file">
                                <?php if ($data['gambar_about']): ?>
                                <img src="about/gambar_about/<?= $data['gambar_about']?>" alt="Foto Lama"
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