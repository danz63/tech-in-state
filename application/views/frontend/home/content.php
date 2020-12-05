<!DOCTYPE html>
<html>
<?php $this->view('frontend/template/_header', ['title' => $article['title']]); ?>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <?php $this->view('frontend/template/_navbar'); ?>
            <!-- partial -->
            <div class="content-wrapper">
                <div class="d-block mx-5">
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="w-100">
                                                <!-- Head Content -->
                                                <div class="mainheading mx-4">
                                                    <div class="row post-top-meta">
                                                        <div class="col-md-2">
                                                            <div class="text-center">
                                                                <!-- <img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"> -->
                                                                <img class="author-thumb" src="<?= base_url('/assets/backend/img/profile/' . getUserById($article['created_by'])['image']); ?>" alt="<?= getUserById($article['created_by'])['name'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p class="no-underline" href="#"><?= getUserById($article['created_by'])['name'] ?></p>
                                                            <span class="author-description">Cuma Seseorang</span><br>
                                                            <span class="post-date"><?= date('d m Y', $article['created_at']) ?></span>
                                                            <span class="dot"></span><span class="post-read">6 min read</span>
                                                        </div>
                                                        <h1 class="posttitle"><?= $article['title'] ?></h1>
                                                    </div>
                                                </div>
                                                <!-- End Of Head Content -->

                                                <!-- Thumbnail Article -->
                                                <img src="<?= base_url('assets/backend/img/picture/' . $article['thumbnail']) ?>" alt="banner" class="img-fluid rounded featured-image" />

                                                <!-- Content Article -->
                                                <div class="article-post">
                                                    <?= fiterHTML4Tag($article['content']) ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <!-- Artikel Terbaru Lainnya -->
                                            <div class="w-100 bg-dark text-white">
                                                <h3 class="p-2">Artikel Lainnya</h3>
                                                <?php foreach (getLastestArticle() as $art) : ?>
                                                    <div class="row">
                                                        <div class="col-12 text-center rotate-img">
                                                            <img src="<?= base_url('assets/backend/img/picture/' . $art['thumbnail']) ?>" class="img-thumbnail" alt="<?= $art['title']; ?>">
                                                        </div>
                                                        <div class="col-12 px-5 py-2">
                                                            <small class="text-sm"><?= date('d-m-Y', $art['created_at']) ?>, Oleh <?= getUserById($art['created_by'])['name'] ?></small>
                                                            <p class="text-left">
                                                                <a href="<?= base_url('home/read/' . $art['id']); ?>" class="no-underline"><?= $art['title']; ?></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="divider"></div>
                                                <?php endforeach; ?>
                                            </div>
                                            <!-- End Of Artikel Terbaru Lainnya -->

                                            <!-- Adsence -->
                                            <div class="w-100 bg-light">
                                                <h3 class="p-2">Ads</h3>
                                                <div class="row">

                                                </div>
                                                <div class="divider"></div>
                                            </div>
                                            <!-- End Of Adsence -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->view('frontend/template/_footer'); ?>
        </div>
    </div>
    <?php $this->view('frontend/template/_script'); ?>

</body>

</html>