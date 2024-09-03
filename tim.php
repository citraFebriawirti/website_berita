<!-- Latest News Start -->
<div class="container-fluid latest-news py-5">
    <div class="container">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>

            <li class="breadcrumb-item active text-dark">Tim</li>
        </ol>
    </div>
    <div class="container py-5">
        <h2 class="mb-4">Tim Kami</h2>
        <div class="latest-news-carousel owl-carousel">
            <!-- Pindahkan carousel ke luar while loop -->
            <?php
        include "koneksi.php";
        $about = mysqli_query($koneksi, "SELECT * FROM tim_kami ORDER BY id_tim");
        while ($data = mysqli_fetch_array($about)) {
        ?>
            <div class="bg-light rounded">
                <div class="rounded-top overflow-hidden">
                    <img src="admin/timkami/gambar_tim/<?= $data['foto'] ?>"
                        class="img-zoomin img-fluid rounded-top w-100" alt="">
                </div>
                <div class="d-flex flex-column p-4">
                    <a href="#" class="h4"><?= $data['nama_tim'] ?></a>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="small text-body link-hover"><?= $data['jabatan'] ?></a>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Latest News End -->