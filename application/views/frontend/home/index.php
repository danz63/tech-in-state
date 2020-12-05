<?php get_instance()->load->helper('self'); ?>
<!DOCTYPE html>
<html>
<?php $this->view('frontend/template/_header', $title); ?>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <?php $this->view('frontend/template/_navbar'); ?>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-8 stretch-card grid-margin">
                            <div class="position-relative bg-primary">
                                <img src="<?= base_url('assets/backend/img/picture/' . $article[0]['thumbnail']) ?>" alt="banner" class="img-fluid" />
                                <div class="banner-content">
                                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                        new
                                    </div>
                                    <h1 class="mb-2">
                                        <a href="<?= base_url('home/read/' . $article[0]['id']) ?>" class="no-underline text-white">
                                            <?= $article[0]['title'] ?>
                                        </a>
                                    </h1>
                                    <div class="fs-12">
                                        <span class="mr-2">Artikel </span><?= getDifference($article[0]['created_at']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 stretch-card grid-margin">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h2>Berita Terbaru</h2>
                                    <?php $escape = 0; ?>
                                    <?php foreach ($article as $a) : ?>
                                        <?php if (array_search($a, $article) == '0') : ?>
                                            <?php continue; ?>
                                        <?php endif; ?>
                                        <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                            <div class="pr-3">
                                                <h5>
                                                    <a href="<?= base_url('home/read/' . $a['id']) ?>" class=" text-white">
                                                        <?= $a['title'] ?>
                                                    </a>
                                                </h5>
                                                <div class="fs-12">
                                                    <span class="mr-2">Artikel </span><?= getDifference($a['created_at']) ?>
                                                </div>
                                            </div>
                                            <div class="rotate-img">
                                                <img src="<?= base_url('assets/backend/img/picture/' . $a['thumbnail']) ?>" alt="thumb" class="img-fluid img-lg" style="object-fit: cover;" />
                                            </div>
                                        </div>
                                        <?php $escape++; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-4 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Seri Belajar</h2>
                                    <ul class="vertical-menu">
                                        <?php foreach ($series as $seri) : ?>
                                            <li>
                                                <a href="<?= base_url('home/series/' . $seri['id']) ?>"><?= $seri['seri']; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="divider"></div>
                                    <?php foreach ($article as $a) : ?>
                                        <?php if (array_search($a, $article) < $escape) : ?>
                                            <?php continue; ?>
                                        <?php endif; ?>
                                        <div class="row">
                                            <div class="col-sm-4 grid-margin">
                                                <div class="position-relative">
                                                    <div class="rotate-img">
                                                        <img src="<?= base_url('assets/backend/img/picture/' . $a['thumbnail']) ?>" alt="thumb" class="img-fluid" />
                                                    </div>
                                                    <div class="badge-positioned">
                                                        <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8  grid-margin">
                                                <h2 class="mb-2 font-weight-600">
                                                    <a href="<?= base_url('home/read/' . $a['id']) ?>" class="no-underline">
                                                        <?= $a['title'] ?>
                                                    </a>
                                                </h2>
                                                <div class="fs-13 mb-2">
                                                    <span class="mr-2">Photo </span><?= getDifference($a['created_at']) ?>
                                                </div>
                                                <p class="mb-0">
                                                    <?= substr($a['content'], 0, 25) ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
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