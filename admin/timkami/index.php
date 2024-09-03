<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Tim</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Data Tim</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <h5>Data Tim</h5>
                    <a href="?page=timkami/tambah" class="btn  btn-primary "><i class="fa fa-plus mr-2"></i>Tambah
                        Data</a>

                </div>
                <div class="table table-bordered table-responsive p-3 ">
                    <table class="table align-items-center table table-bordered" id="dataTable">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Tim</th>
                                <th>Jabatan</th>
                                <th>Foto </th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
              
                                $no = 1;
                                $query = mysqli_query($koneksi,"SELECT * FROM tim_kami  ORDER BY id_tim DESC");

                                // looping data  
                            while( $data = mysqli_fetch_array($query)){
                                ?>
                            <tr class="text-center">
                                <td> <?php echo $no++?> </td>
                                <td><?= $data['nama_tim'] ?></td>
                                <td><?= $data['jabatan']; ?></td>

                                <td>
                                    <?php echo "<img src='timkami/gambar_tim/".$data['foto']."' style='width: 200px; height: 200px; object-fit: cover;' alt='".$data['nama_tim']."' >"; ?>
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center ">
                                        <a href="?page=timkami/ubah&id_tim=<?= $data['id_tim'] ?>"
                                            class="btn btn-success mr-3"><i class="fa fa-pencil-alt"></i></a>
                                        <a onclick="return confirm('Yakin Ingin Dihapus')"
                                            href="timkami/hapus.php?page=ubah_timkami&id_tim=<?= $data['id_tim'] ?>"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>

                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->





</div>
<!---Container Fluid-->