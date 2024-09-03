<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Berita</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page">Data Berita</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <h5>Data Berita</h5>
                    <a href="?page=berita/tambah" class="btn  btn-primary "><i class="fa fa-plus mr-2"></i>Tambah
                        Data</a>

                </div>
                <div class="table table-bordered table-responsive p-3 ">
                    <table class="table align-items-center table table-bordered" id="dataTable">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Judul Berita</th>
                                <th>Tanggal Berita</th>
                                <th>Isi Berita</th>
                                <th>Gambar Berita</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
           
                                $no = 1;
                                $query = mysqli_query($koneksi,"SELECT * FROM berita a JOIN kategori b
                                ON a.id_kategori=b.id_kategori ORDER BY id_berita DESC");

                            // looping data  p
                             while( $data = mysqli_fetch_array($query)){
                             ?>
                            <tr class="text-center">
                                <td> <?= $no++?> </td>
                                <td><?= $data['nama_kategori'] ?></td>
                                <td> <a href="detail_berita.php?id_berita=<?= $data['id_berita']; ?>">
                                        <?= $data['judul_berita']; ?>
                                    </a></td>
                                <td><?= date('d-m-Y', strtotime($data['tgl_berita'])) ?></td>

                                <td><?= substr($data['isi_berita'], 0, 150); ?></td>


                                <td>
                                    <?= "<img src='berita/uploads/".$data['gambar_berita']."' style='width: 200px; height: 200px; object-fit: cover;' alt='".$data['judul_berita']."' >"; ?>
                                </td>

                                <td>
                                    <div class="d-flex justify-content-between ">
                                        <a href="?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>"
                                            class="btn btn-success mr-3"><i class="fa fa-pencil-alt"></i></a>
                                        <a onclick="return confirm('Yakin Ingin Dihapus')"
                                            href="berita/hapus.php?page=ubah_berita&id_berita=<?= $data['id_berita'] ?>"
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