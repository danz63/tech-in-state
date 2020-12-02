<!DOCTYPE html>
<html>
<?php $this->view('frontend/template/_header', $title); ?>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <?php $this->view('frontend/template/_navbar', $topnav); ?>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <div class="position-relative">
                                <img src="<?= base_url() ?>assets/frontend/images/logos/html.png" alt="banner" class="img-fluid h-100" style="object-fit: none;" />
                                <div class="banner-content">
                                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                        viral
                                    </div>
                                    <h1 class="mb-0">HTML</h1>
                                    <h1 class="mb-2">
                                        Mencengangkan! Ternyata HTML Bukan Bahasa Pemrograman, Berikut Penuturan para ahli...
                                    </h1>
                                    <div class="fs-12">
                                        <span class="mr-2">Artikel </span>10 menit yang lalu
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 stretch-card grid-margin">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h2>Berita Terbaru</h2>

                                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                        <div class="pr-3">
                                            <h5>Ternyata PHP BUkan Singkatan dari "Pemberi Harapan Palsu"</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Artikel </span>13 menit yang lalu
                                            </div>
                                        </div>
                                        <div class="rotate-img">
                                            <img src="<?= base_url() ?>assets/frontend/images/logos/php.png" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
                                        </div>
                                    </div>

                                    <div class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                                        <div class="pr-3">
                                            <h5>Masih Hidup kah Lumba-Lumba yang menjadi logo MySQL?</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Artikel </span>18 menit yang lalu
                                            </div>
                                        </div>
                                        <div class="rotate-img">
                                            <img src="<?= base_url() ?>assets/frontend/images/logos/mysql.png" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
                                        </div>
                                    </div>

                                    <div class="d-flex pt-4 align-items-center justify-content-between">
                                        <div class="pr-3">
                                            <h5>Bosan Dengan King Cobra, Pria ini Mencoba Python, Tebak Siapa Pria Ini..</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Artikel </span>20 menit yang lalu
                                            </div>
                                        </div>
                                        <div class="rotate-img">
                                            <img src="<?= base_url() ?>assets/frontend/images/logos/python.png" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-3 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Kategori</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="#">PHP</a></li>
                                        <li><a href="#">Javascript</a></li>
                                        <li><a href="#">CSS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="<?= base_url() ?>assets/frontend/images/dashboard/home_4.jpg" alt="thumb" class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned">
                                                    <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8  grid-margin">
                                            <h2 class="mb-2 font-weight-600">
                                                South Korea’s Moon Jae-in sworn in vowing to address
                                                North
                                            </h2>
                                            <div class="fs-13 mb-2">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </div>
                                            <p class="mb-0">
                                                Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->
            <?php $this->view('frontend/template/_footer'); ?>
        </div>
    </div>
    <?php $this->view('frontend/template/_script'); ?>
</body>

</html>