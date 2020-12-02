<!DOCTYPE html>
<html>
<?php $this->view('frontend/template/_header'); ?>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <?php $this->view('frontend/template/_navbar'); ?>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-8 stretch-card grid-margin">
                            <div class="card">
                                <div class="row">
                                    <div class="card-body">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="card-title">
                                                Artikel Terbaru
                                            </div>
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
                                                <!-- Judul Artikel -->
                                                Tutorial CRUD Codeigniter 3 Part I
                                            </h2>
                                            <div class="fs-13 mb-2">
                                                <!-- Kategori Artikel -->
                                                <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                <span class="badge badge-danger font-weight-bold">Flash news</span>
                                            </div>
                                            <p class="mb-0">
                                                <!-- Sample Konten -->
                                                Pada kesempatan ini kita akan memulai seri CRUD Codeigniter 3
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">
                                            Series
                                        </div>
                                        <p class="mb-3">Lihat Semua</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="<?= base_url() ?>assets/frontend/images/dashboard/home_11.jpg" alt="thumb" class="img-fluid" />
                                            </div>
                                        </div>
                                        <a href="" class="no-underline">
                                            Tutorial CRUD Codeigniter 3 (4 Artikel)
                                        </a>
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