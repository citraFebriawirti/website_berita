<!-- Contact Us Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>

            <li class="breadcrumb-item active text-dark">Kontak</li>
        </ol>
        <div class="bg-light rounded p-5">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="">
                        <h1 class="mb-4">Kontak Kami</h1>

                        <div class="rounded">
                            <iframe class="rounded w-100" style="height: 425px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2666196122977!2d100.38663777364508!3d-0.9528353353498165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b90bd1a8788f%3A0x90288b7bbe595a1a!2sMediatama%20Web%20-%20Kursus%20Komputer%2C%20Pembuatan%20Web%20dan%20Mobile!5e0!3m2!1sid!2sid!4v1725259686412!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">

                    <div class="row g-4 mt-5">
                        <?php
                        include "koneksi.php";
                        $kontak = mysqli_query($koneksi, "SELECT * FROM kontak
                        ORDER BY id_kontak");
                        while ($data = mysqli_fetch_array($kontak)) {
                        ?>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fab fa-facebook fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Facebook</h4>
                                    <p class="mb-0 " style="font-size: 13px;"><?= $data['facebook'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fab fa-instagram fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Instagram</h4>
                                    <p class="mb-0" style="font-size: 13px;"><?= $data['instagram'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0" style="font-size: 13px;"><?= $data['no_telp'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Alamat</h4>
                                    <p class="mb-0" style="font-size: 13px;"><?= $data['alamat'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us End -->