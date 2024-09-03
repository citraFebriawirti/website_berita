<!-- Single Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>

            <li class="breadcrumb-item active text-dark">Tentang</li>
        </ol>
        <div class="row g-4">
            <?php
            include "koneksi.php";
             $about = mysqli_query($koneksi, "SELECT * FROM about
        
            ORDER BY id_about");
            while ($data = mysqli_fetch_array($about)) {
            ?>
            <div class="row g-4 align-items-center">
                <div class="col-6">
                    <img src="admin/about/gambar_about/<?= $data['gambar_about'] ?>" class="img-fluid  rounded h-100"
                        alt="" style="width: 2000px;">
                </div>
                <div class="col-6">
                    <div>
                        <h3><i class="fas fa-eye me-3"></i>Visi</h3>
                        <p class="mb-0"> <?= $data['visi_about'] ?>
                        </p>
                    </div>
                    <div class="mt-4">
                        <h3><i class="fas fa-compress-arrows-alt me-3"></i>Misi</h3>
                        <p class="mb-0 text-align-justify" style="text-align: justify;"> <?= $data['misi_about'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Single Product End -->