<!-- Features Start -->
<div class="container-fluid features mb-5">
    <div class="container py-5">
        <div class="row g-4">
            <marquee behavior="" direction="" style="font-weight: bold;background: rgb(2,0,36);
background: linear-gradient(84deg, rgba(2,0,36,1) 0%, rgba(27,125,255,1) 0%, rgba(202,239,246,1) 79%);">
                <h1>SELAMAT DATANG DI NEWS NESPAPER
                </h1>
            </marquee>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Main Post Section Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <?php
                include "koneksi.php";
                // Fetch only the most recent news article
                $query = "SELECT * FROM berita
                        JOIN kategori ON berita.id_kategori = kategori.id_kategori
                        ORDER BY id_berita DESC
                        LIMIT 1";
                $result = mysqli_query($koneksi, $query);
                
                if ($m = mysqli_fetch_array($result)) {
                ?>
            <div class="col-lg-7 col-xl-8 mt-0">
                <div class="position-relative overflow-hidden rounded">
                    <img src="admin/berita/uploads/<?= $m['gambar_berita'] ?>"
                        class="img-fluid rounded img-zoomin w-100" alt="">
                    <div class="d-flex justify-content-center px-4 position-absolute flex-wrap"
                        style="bottom: 10px; left: 0;">
                        <a href="#" class="text-white me-3 link-hover"><i class="fa fa-clock"></i>
                            <?= $m['tgl_berita'] ?></a>
                        <a href="#" class="text-white me-3 link-hover"><i
                                class="fa fa-eye"></i><?= $m['nama_kategori'] ?></a>

                    </div>
                </div>
                <div class="border-bottom py-3">
                    <a href="?page=detail_berita&id_berita=<?= $m['id_berita'] ?>"
                        class=" text-dark mb-0 link-hover fw-bold"
                        style="font-size: 25px;"><?= $m['judul_berita'] ?></a>
                </div>
                <p class="mt-3 mb-4"><?= $m['isi_berita'] ?></p>
            </div>
            <?php } ?>

            <div class="col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 pt-0">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="rounded overflow-hidden">
                                <img src="assets/assets/img/news-3.jpg" class="img-fluid rounded img-zoomin w-100"
                                    alt="">
                            </div>
                        </div>
                        <?php
                // Fetch recent news articles for the sidebar
                $query_sidebar = "SELECT * FROM berita
                                  JOIN kategori ON berita.id_kategori = kategori.id_kategori
                                  ORDER BY id_berita DESC
                                  LIMIT 5";
                $result_sidebar = mysqli_query($koneksi, $query_sidebar);
                while ($m = mysqli_fetch_array($result_sidebar)) {
                ?>
                        <div class="col-12">
                            <div class="row g-4 align-items-center">
                                <div class="col-5">
                                    <div class="overflow-hidden rounded">
                                        <img src="admin/berita/uploads/<?= $m['gambar_berita'] ?>"
                                            class="img-zoomin img-fluid rounded w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="features-content d-flex flex-column">
                                        <a href="?page=detail_berita&id_berita=<?= $m['id_berita'] ?>"
                                            class="h6"><?= $m['judul_berita'] ?></a>
                                        <small><i class="fa fa-th"> <?= $m['nama_kategori']?></i> </small>
                                        <small><i class="fa fa-clock">
                                                <?= date('M, d Y', strtotime($m['tgl_berita']))?></i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light p-4 rounded">
            <div class="news-2">
                <h3 class="mb-4">Top Story</h3>
            </div>
            <div class="row g-4 align-items-center">
                <?php
               include "koneksi.php";
               if(isset($_POST['cari'])){
                $keyword = $_POST['keyword'];
                $berita = mysqli_query($koneksi, "SELECT * FROM berita WHERE judul_berita LIKE '%$keyword%'");
            
                if(mysqli_num_rows($berita) > 0){
                    // Fetch and display the results
                    while($row = mysqli_fetch_assoc($berita)) {
                        // Display your data here
                    }
                } else {
                    echo "Data Tidak di temukan";
                }
            } else {
                $berita = mysqli_query($koneksi, "SELECT * FROM berita LIMIT 2");
                // Display your data here
            }
            
               
                while ($data = mysqli_fetch_array($berita)) {
                ?>
                <div class="col-12">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="rounded overflow-hidden">
                                <img src="admin/berita/uploads/<?= $data['gambar_berita'] ?>"
                                    class="img-fluid rounded img-zoomin w-75" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <a href="#" class="h3"><?=$data['judul_berita']?></a>
                                <p class="mb-0 fs-5"><i class="fa fa-clock"></i> <?=$data['tgl_berita']?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<!-- Main Post Section End -->


<!-- Banner Start -->
<div class="container-fluid py-5 my-5"
    style="background: linear-gradient(rgba(202, 203, 185, 1), rgba(202, 203, 185, 1));">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-4 text-primary">Newsers</h1>
                <h1 class="mb-4">Get Every Weekly Updates</h1>
                <p class="text-dark mb-4 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control w-100 py-3 rounded-pill" type="email" placeholder="Your Busines Email">
                    <button type="submit"
                        class="btn btn-primary py-3 px-5 position-absolute rounded-pill text-white h-100"
                        style="top: 0; right: 0;">Subscribe Now</button>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="rounded">
                    <img src="assets/img/banner-img.jpg" class="img-fluid rounded w-100 rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Latest News Start -->
<div class="container-fluid latest-news py-5">
    <div class="container py-5">
        <h2 class="mb-4">Latest News</h2>
        <div class="latest-news-carousel owl-carousel">
            <?php
            include "koneksi.php";
            if(isset($_GET['nama_kategori'])){
                $nama_kategori=$_GET['nama_kategori'];
                $most = mysqli_query($koneksi, "SELECT * FROM berita
                JOIN kategori ON berita.id_kategori=kategori.id_kategori
                WHERE nama_kategori='$nama_kategori'
                ORDER BY id_berita");
            }else{
                $most = mysqli_query($koneksi, "SELECT * FROM berita
                JOIN kategori ON berita.id_kategori=kategori.id_kategori
                ORDER BY id_berita");
            }
           
            while ($m = mysqli_fetch_array($most)) {
             ?>
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <img src="admin/berita/uploads/<?= $m['gambar_berita'] ?>"
                            class="img-zoomin img-fluid rounded-top w-100" alt="" style="height: 250px;">
                    </div>
                    <div class="d-flex flex-column p-4">
                        <a href="?page=detail_berita&id_berita=<?= $m['id_berita'] ?>"
                            class="h6"><?= $m['judul_berita'] ?></a>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover"><?= $m['nama_kategori']?></a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                <?= date('M, d Y', strtotime($m['tgl_berita']))?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Latest News End -->


<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-8 col-xl-9">

                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                            <h1 class="mb-4">What’s New</h1>
                            <ul class="nav nav-pills d-inline-flex text-center">
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill"
                                        href="#tab-1">
                                        <span class="text-dark" style="width: 100px;">Sports</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill"
                                        href="#tab-2">
                                        <span class="text-dark" style="width: 100px;">Magazine</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill"
                                        href="#tab-3">
                                        <span class="text-dark" style="width: 100px;">Politics</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill"
                                        href="#tab-4">
                                        <span class="text-dark" style="width: 100px;">Technology</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill"
                                        href="#tab-5">
                                        <span class="text-dark" style="width: 100px;">Fashion</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mb-4">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="position-relative rounded overflow-hidden">
                                            <img src="assets/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                                alt="">
                                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                                style="top: 20px; right: 20px;">
                                                Sports
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</a>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                                minute read</a>
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                                Views</a>
                                            <a href="#" class="text-dark link-hover me-3"><i
                                                    class="fa fa-comment-dots"></i>
                                                05 Comment</a>
                                            <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                                Share</a>
                                        </div>
                                        <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                            been the industry's standard dummy..
                                        </p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-3.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Sports</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-4.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Sports</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-5.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Sports</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-6.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Sports</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-7.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Magazine</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="position-relative rounded overflow-hidden">
                                            <img src="assets/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                                alt="">
                                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                                style="top: 20px; right: 20px;">
                                                Magazine
                                            </div>
                                        </div>
                                        <div class="my-3">
                                            <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</a>
                                        </div>
                                        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                            been the industry's standard dummy..
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                                minute read</a>
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                                Views</a>
                                            <a href="#" class="text-dark link-hover me-3"><i
                                                    class="fa fa-comment-dots"></i>
                                                05 Comment</a>
                                            <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                                Share</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-3.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Magazine</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-4.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Magazine</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-5.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Magazine</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-6.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Magazine</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-7.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Magazine</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="position-relative rounded overflow-hidden">
                                            <img src="assets/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                                alt="">
                                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                                style="top: 20px; right: 20px;">
                                                Politics
                                            </div>
                                        </div>
                                        <div class="my-3">
                                            <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</a>
                                        </div>
                                        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                            been the industry's standard dummy..
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                                minute read</a>
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                                Views</a>
                                            <a href="#" class="text-dark link-hover me-3"><i
                                                    class="fa fa-comment-dots"></i>
                                                05 Comment</a>
                                            <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                                Share</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-3.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Politics</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-4.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Politics</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-5.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Politics</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-6.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Politics</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-7.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Politics</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="position-relative rounded overflow-hidden">
                                            <img src="assets/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                                alt="">
                                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                                style="top: 20px; right: 20px;">
                                                Technology
                                            </div>
                                        </div>
                                        <div class="my-3">
                                            <a href="#" class="h4">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</a>
                                        </div>
                                        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                            been the industry's standard dummy
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                                minute read</a>
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                                Views</a>
                                            <a href="#" class="text-dark link-hover me-3"><i
                                                    class="fa fa-comment-dots"></i>
                                                05 Comment</a>
                                            <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                                Share</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-3.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-4.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-5.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-6.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-7.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Technology</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-pane fade show p-0">
                                <div class="row g-4">
                                    <div class="col-lg-8">
                                        <div class="position-relative rounded overflow-hidden">
                                            <img src="assets/img/news-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                                alt="">
                                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded"
                                                style="top: 20px; right: 20px;">
                                                Fashion
                                            </div>
                                        </div>
                                        <div class="my-3">
                                            <a href="#" class="h4">World Happiness Report 2023: What's the highway to
                                                happiness?</a>
                                        </div>
                                        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has
                                            been the industry's standard dummy
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-clock"></i> 06
                                                minute read</a>
                                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> 3.5k
                                                Views</a>
                                            <a href="#" class="text-dark link-hover me-3"><i
                                                    class="fa fa-comment-dots"></i>
                                                05 Comment</a>
                                            <a href="#" class="text-dark link-hover"><i class="fa fa-arrow-up"></i> 1.5k
                                                Share</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-3.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-4.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-5.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-6.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center">
                                                    <div class="col-5">
                                                        <div class="overflow-hidden rounded">
                                                            <img src="assets/img/news-7.jpg"
                                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">Fashion</p>
                                                            <a href="#" class="h6">Get the best speak market, news.</a>
                                                            <small class="text-body d-block"><i
                                                                    class="fas fa-calendar-alt me-1"></i> Dec 9,
                                                                2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="border-bottom mb-4">
                        <h2 class="my-4">Most Views News</h2>
                    </div>
                    <div class="whats-carousel owl-carousel">
                        <?php
                                include "koneksi.php";
                                $most = mysqli_query($koneksi, "SELECT * FROM berita
                                JOIN kategori ON berita.id_kategori=kategori.id_kategori
                                ORDER BY id_berita");
                                while ($m = mysqli_fetch_array($most)) {
                                ?>
                        <div class="latest-news-item">
                            <div class="bg-light rounded">
                                <div class="rounded-top overflow-hidden">
                                    <img src="admin/berita/uploads/<?= $m['gambar_berita'] ?>"
                                        class="fixed-size img-fluid rounded-top w-100" alt="" style="height: 250px;">
                                </div>
                                <div class="d-flex flex-column p-4">
                                    <a href="?page=detail_berita&id_berita=<?= $m['id_berita'] ?>"
                                        class="h4"><?= $m['judul_berita'] ?></a>
                                    <a href="#" class="small text-body link-hover"><?= $m['nama_kategori']?></a>
                                    <div class="d-flex justify-content-between">
                                        <small class="text-body ms-auto d-block"><i
                                                class="fas fa-calendar-alt me-1"></i>
                                            <?= date('M, d Y', strtotime($m['tgl_berita']))?></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>

                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <h4 class="mb-4">Stay Connected</h4>
                                <div class="row g-4">
                                    <?php
                                include "koneksi.php";
                                $about = mysqli_query($koneksi, "SELECT * FROM kontak
                                ORDER BY id_kontak");
                                while ($data = mysqli_fetch_array($about)) {
                                ?>
                                    <div class="col-12">
                                        <a href="#"
                                            class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                            <i
                                                class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white"
                                                style="font-size: 12px;"><?= $data['facebook'] ?></span>
                                        </a>

                                        <a href="#"
                                            class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                            <i
                                                class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white"
                                                style="font-size: 12px;"><?= $data['instagram'] ?></span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                            <i class="fa fa-phone-alt btn btn-light rounded-circle me-3"></i>
                                            <span class="text-white"
                                                style="font-size: 12px;"><?= $data['no_telp'] ?></span>
                                        </a>
                                        <a href="#"
                                            class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                            <i class="fas fa-map btn btn-light btn-square rounded-circle me-3"></i>
                                            <span class="text-white"
                                                style="font-size: 12px;"><?= $data['alamat'] ?></span>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <h4 class="my-4">Popular News</h4>
                                <div class="row g-4">
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assets/img/features-sports-1.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Sports</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assets/img/features-technology.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Technology</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assets/img/features-fashion.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Fashion</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row g-4 align-items-center features-item">
                                            <div class="col-4">
                                                <div class="rounded-circle position-relative">
                                                    <div class="overflow-hidden rounded-circle">
                                                        <img src="assets/img/features-life-style.jpg"
                                                            class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                    </div>
                                                    <span
                                                        class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute"
                                                        style="top: 10%; right: -10px;">3</span>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="features-content d-flex flex-column">
                                                    <p class="text-uppercase mb-2">Life Style</p>
                                                    <a href="#" class="h6">
                                                        Get the best speak market, news.
                                                    </a>
                                                    <small class="text-body d-block"><i
                                                            class="fas fa-calendar-alt me-1"></i> December 9,
                                                        2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#"
                                            class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View
                                            More</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom my-3 pb-3">
                                            <h4 class="mb-0">Trending Tags</h4>
                                        </div>
                                        <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Lifestyle</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Sports</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Politics</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Magazine</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Game</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover"
                                                        style="width: 90px;">Travel</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">World</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative banner-2">
                                            <img src="assets/img/banner-2.jpg" class="img-fluid w-100 rounded" alt="">
                                            <div class="text-center banner-content-2">
                                                <h6 class="mb-2">The Most Populer</h6>
                                                <p class="text-white mb-2">News & Magazine WP Theme</p>
                                                <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most Populer News End -->