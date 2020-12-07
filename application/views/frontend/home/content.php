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
                <div class="d-block mx-5 mt-5">
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12">
                            <div class="card" data-aos="fade-up">
                                <div class="card-body">
                                    <h3>Komentar</h3>
                                    <div class="row">
                                        <div class="col-lg-8 mb-5 mb-sm-2">
                                            <div class="divider"></div>
                                            <div class="comment-widgets">
                                                <?php if (getCommentOfArticle($article['id'])->num_rows() < 1) : ?>
                                                    <div class="d-flex flex-row comment-row mt-1">
                                                        <div class="comment-text w-100 mb-2">
                                                            <h4 class="font-medium"></h4> <span class="m-b-15 d-block">Belum Ada Komentar </span>
                                                            <div class="comment-footer"></div>
                                                        </div>
                                                    </div>
                                                    <div class="divider"></div>
                                                <?php endif; ?>
                                                <!-- Comment Row -->
                                                <?php foreach (getCommentOfArticle($article['id'])->result_array() as $comment) : ?>
                                                    <div class="d-flex flex-row comment-row mt-1">
                                                        <div class="comment-text w-100">
                                                            <h4 class="font-medium"><?= $comment['created_by']; ?></h4> <span class="m-b-15 d-block"><?= $comment['comment']; ?> </span>
                                                            <div class="comment-footer"> <span class="text-muted float-right"><?= getDifference($comment['created_at']); ?></span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="divider"></div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>
                                        Tinggalkan Komentar
                                    </h3>
                                    <div class="row">
                                        <div class="col-lg-8 mb-5 mb-sm-2">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="created_by" name="created_by" aria-describedby="created_by" placeholder="Nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control textarea" placeholder="Komentar" name="comment" id="comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-lg btn-dark font-weight-bold mt-3" id="btnSendComment" data-id="<?= $article['id']; ?>" data-value="<?= base_url('home/send_comment') ?>">Kirim Komentar</button>
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
        <?php $this->view('frontend/template/_footer'); ?>
    </div>
    <div class="modal fade" id="modalSendComment" tabindex="-1" aria-labelledby="ModalSendComment" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <span class="mdi mdi-loading mdi-spin mdi-48px"></span>
                    <h3>Please Wait</h3>
                </div>
            </div>
        </div>
    </div>
    <?php $this->view('frontend/template/_script'); ?>
</body>

</html>