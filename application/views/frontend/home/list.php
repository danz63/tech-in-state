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
                                <div class="card-title m-3">
                                    <?= $title; ?>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php if (count($article) < 1) : ?>
                                            <div class="col-sm-8 grid-margin">
                                                <h2 class="mb-2 font-weight-600">
                                                    <!-- Judul Artikel -->
                                                    Mohon Maaf!
                                                </h2>
                                                <p class="mb-0">
                                                    <!-- Sample Konten -->
                                                    Maaf Artikel Belum Tersedia
                                                </p>
                                            </div>
                                        <?php endif; ?>

                                        <?php foreach ($article as $art) : ?>
                                            <div class="row">
                                                <div class="col-sm-4 grid-margin">
                                                    <div class="position-relative">
                                                        <div class="rotate-img">
                                                            <img src="<?= base_url('assets/backend/img/picture/' . $art['thumbnail']) ?>" alt="thumb" class="img-fluid" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <a class="mb-2 font-weight-600 no-underline" href="<?= base_url('home/read/' . $art['id']) ?>">
                                                        <?= $art['title']; ?>
                                                    </a>
                                                    <div class="fs-13 mb-2">
                                                        <!-- Kategori Artikel -->
                                                        <?php foreach (getCategoryOfArticle($art['id']) as $ct) : ?>
                                                            <span class="badge badge-primary font-weight-bold"><?= $ct['category']; ?></span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <p class="mb-0">
                                                        <!-- Sample Konten -->
                                                        Pada kesempatan ini kita akan memulai seri CRUD Codeigniter 3
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 stretch-card grid-margin">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">
                                            Series
                                        </div>
                                    </div>
                                    <?php foreach ($series as $seri) : ?>
                                        <div class="d-flex align-items-center border-bottom pb-2 my-2">
                                            <div style="width: 32px;">
                                                <div class="rotate-img">
                                                    <img src="<?= base_url('assets/backend/img/picture/' . $seri['thumbnail']) ?>" alt="thumb" class="img-fluid" />
                                                </div>
                                            </div>
                                            <a href="<?= base_url('home/series/' . $seri['id']); ?>" class="no-underline ml-3">
                                                <?= $seri['seri']; ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
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