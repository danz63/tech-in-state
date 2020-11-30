<!DOCTYPE html>
<html>
<?php $this->view('front_end/template/_header'); ?>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <?php $this->view('front_end/template/_navbar'); ?>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <div class="position-relative">
                                <img src="<?= base_url() ?>assets/images/logos/html.png" alt="banner" class="img-fluid h-100" style="object-fit: none;" />
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
                                            <img src="<?= base_url() ?>assets/images/logos/php.png" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
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
                                            <img src="<?= base_url() ?>assets/images/logos/mysql.png" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
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
                                            <img src="<?= base_url() ?>assets/images/logos/python.png" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
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
                                                    <img src="<?= base_url() ?>assets/images/dashboard/home_4.jpg" alt="thumb" class="img-fluid" />
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

                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="<?= base_url() ?>assets/images/dashboard/home_5.jpg" alt="thumb" class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned">
                                                    <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8  grid-margin">
                                            <h2 class="mb-2 font-weight-600">
                                                No charges over 2017 Conservative battle bus cases
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

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="<?= base_url() ?>assets/images/dashboard/home_6.jpg" alt="thumb" class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned">
                                                    <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <h2 class="mb-2 font-weight-600">
                                                Kaine: Trump Jr. may have committed treason
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
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="card-title">
                                                Video
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_7.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_8.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="badge badge-danger font-weight-bold">National News</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_9.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_10.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <div class="badge-positioned w-90">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="badge badge-danger font-weight-bold">National News</span>
                                                                <div class="video-icon">
                                                                    <i class="mdi mdi-play"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="card-title">
                                                    Latest Video
                                                </div>
                                                <p class="mb-3">See all</p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/dashboard/home_11.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    Apple Introduces Apple Watch
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/dashboard/home_12.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    SEO Strategy & Google Search
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/dashboard/home_13.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    Cycling benefit & disadvantag
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/dashboard/home_14.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600">
                                                    The Major Health Benefits of
                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pt-3">
                                                <div class="div-w-80 mr-3">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/dashboard/home_15.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <h3 class="font-weight-600 mb-0">
                                                    Powerful Moments of Peace
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card-title">
                                                Sport light
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-8 col-sm-6">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/dashboard/home_16.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                    <h2 class="mt-3 text-primary mb-2">
                                                        Newsrooms exercise..
                                                    </h2>
                                                    <p class="fs-13 mb-1 text-muted">
                                                        <span class="mr-2">Photo </span>10 Minutes ago
                                                    </p>
                                                    <p class="my-3 fs-15">
                                                        Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer
                                                        took
                                                    </p>
                                                    <a href="#" class="font-weight-600 fs-16 text-dark">Read more</a>
                                                </div>
                                                <div class="col-xl-6 col-lg-4 col-sm-6">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Social distancing is ..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Panic buying is forcing..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Businesses ask hundreds..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h3 class="font-weight-600 mb-0">
                                                            Tesla's California factory..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card-title">
                                                        Sport light
                                                    </div>
                                                    <div class="border-bottom pb-3">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_17.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                    <div class="pt-3 pb-3">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_18.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card-title">
                                                        Celebrity news
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_19.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_20.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_21.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="<?= base_url() ?>assets/images/dashboard/home_22.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
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
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->
            <?php $this->view('front_end/template/_footer'); ?>
        </div>
    </div>
    <?php $this->view('front_end/template/_script'); ?>
</body>

</html>