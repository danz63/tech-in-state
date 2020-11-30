<!DOCTYPE html>
<html>
<?php $this->view('front_end/template/_header'); ?>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <?php $this->view('front_end/template/_navbar'); ?>
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
                                                                <img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p class="no-underline" href="#">Admin</p>
                                                            <span class="author-description">Cuma Seseorang</span><br>
                                                            <span class="post-date">29 Nov 2020</span>
                                                            <span class="dot"></span><span class="post-read">6 min read</span>
                                                        </div>
                                                        <h1 class="posttitle">Mencengangkan! Ternyata HTML Bukan Bahasa Pemrograman</h1>
                                                    </div>
                                                </div>
                                                <!-- End Of Head Content -->

                                                <!-- Thumbnail Article -->
                                                <img src="<?= base_url() ?>assets/images/logos/html.png" alt="banner" class="img-fluid h-100 rounded featured-image" style="object-fit: none;" />

                                                <!-- Content Article -->
                                                <div class="article-post">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam necessitatibus, temporibus cupiditate mollitia delectus recusandae quod autem eveniet iure! Odio, fugiat nobis ex voluptatum at necessitatibus aspernatur corporis velit ducimus!</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tempore laboriosam voluptas asperiores id quis ab officia? Praesentium voluptas ipsam error voluptatum aut illo voluptatem ullam natus voluptate, iusto hic!</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quod ipsa hic sint, debitis quasi? Necessitatibus iure accusamus commodi exercitationem placeat rem doloribus doloremque minima nobis soluta. Dolorum, praesentium pariatur?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <!-- Artikel Terbaru Lainnya -->
                                            <div class="w-100 bg-light">
                                                <h3 class="p-2">Artikel Lainnya</h3>

                                                <div class="row">
                                                    <div class="col-12 text-center rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/logos/php.png" class="img-thumbnail" alt="...">
                                                    </div>
                                                    <div class="col-12 px-5 py-2">
                                                        <small class="text-sm">29-Nov-20, Oleh Admin</small>
                                                        <p class="text-justify">
                                                            <a href="" class="no-underline">Ternyata PHP Bukan Singkatan dari "Pemberi Harapan Palsu"</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="row">
                                                    <div class="col-12 text-center rotate-img">
                                                        <img src="<?= base_url() ?>assets/images/logos/mysql.png" class="img-thumbnail" alt="...">
                                                    </div>
                                                    <div class="col-12 px-5 py-2">
                                                        <small class="text-sm">29-Nov-20, Oleh Admin</small>
                                                        <p class="text-justify">
                                                            <a href="" class="no-underline">Masih Hidup kah Lumba-Lumba yang menjadi logo MySQL?</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
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
            <?php $this->view('front_end/template/_footer'); ?>
        </div>
    </div>
    <?php $this->view('front_end/template/_script'); ?>

</body>

</html>