<?php

$id_kontak = $_GET['id_kontak'];
$ubah = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id_kontak='$id_kontak'");
$data = mysqli_fetch_array($ubah);
?>


<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class=" mb-0 text-gray-800">Ubah Data Kontak</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Data Kontak</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Kontak</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Kontak</h6>
                    <a href="?page=kontak/index" class="btn btn-primary"><i
                            class="fas fa-arrow-left mr-2"></i>Kembali</a>
                </div>
                <div class="card-body">
                    <form action="kontak/proses_ubah.php" method="POST">
                        <input type="hidden" name="id_kontak" value="<?php echo $data['id_kontak'] ?>">
                        <div class="form-group mb-3">
                            <label for="">Facebook</label>
                            <input type="text" name="facebook" class="form-control"
                                value="<?php echo $data['facebook']?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Instagram</label>
                            <input type="text" name="instagram" class="form-control"
                                value="<?php echo $data['instagram']?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">No Telp</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp']?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="100"
                                rows="10"><?= $data['alamat'] ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>


        </div>


    </div>
    <!--Row-->



</div>
<!---Container Fluid-->