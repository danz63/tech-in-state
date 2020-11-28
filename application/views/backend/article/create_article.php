<?php $this->view('backend/template/header', $title); ?>

<body>
    <!-- Sidenav -->
    <?php $this->view('backend/dashboard/d_sidenav', $sidebar); ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?php $this->view('backend/dashboard/d_topnav', ['bg' => 'default']); ?>
        <!-- Header -->
        <?php $this->view('backend/dashboard/d_header'); ?>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Form Artikel Baru</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <?php foreach ($images as $img) : ?>
                                        <div class="col-6 col-md-4 col-xl-3">
                                            <div class="card">
                                                <img class="card-img-top" src="<?= base_url('assets/img/picture/' . $img['name']) ?>" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <button class="btn btn-sm btn-secondary btnCopy" data-clipboard-text="<?= base_url('assets/img/picture/' . $img['name']) ?>">
                                                            Copy To Clipboard
                                                        </button>
                                                    </h5>
                                                    <button class="btn btn-sm btn-primary btnModal" data-image="<?= base_url('assets/img/picture/' . $img['name']) ?>" data-title="<?= $img['name']; ?>">Show Modal</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="col-6 col-md-4 col-xl-3 bg-secondary">
                                        <div class="card">
                                            <!-- <img class="card-img-top" src="<?= base_url('assets/img/dashboard/show.png') ?>" alt="Card image cap p-2 img-show-all"> -->

                                            <div class="card-body">
                                                <div class="p-2 text-center">
                                                    <a class="btn" href="<?= base_url('article/show_all_image') ?>" target="_blank">
                                                        <i class="fas fa-external-link-alt fa-7x text-muted"></i>
                                                        <p class="pt-1 text-sm font-lobster">Tampilkan Semua</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="<?= base_url('article/store_article') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="title">Judul Artikel</label>
                                                <input class="form-control" type="text" name="title" id="title" placeholder="Judul">
                                            </div>
                                            <div class="form-group">
                                                <label>Thumbnail Artikel</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file0" name="image[]">
                                                    <label class="custom-file-label" for="file0">Select file</label>
                                                </div>
                                                <p class="my-3">Atau</p>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1" name="checkboxseri">
                                                    <label class="custom-control-label" for="checkbox1">Gunakan Thumbnails Seri</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Kategori Artikel</label>
                                                <div class="form-control">
                                                    <?php foreach ($categories as $c) : ?>
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" id="check<?= $c['id'] ?>" name="categories[]" value="<?= $c['id'] ?>">
                                                            <label class="custom-control-label" for="check<?= $c['id'] ?>"><?= $c['category'] ?></label>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="series">Seri Artikel</label>
                                                <select name="series" id="series" class="form-control">
                                                    <?php foreach ($series as $s) : ?>
                                                        <option value="<?= $s['id']; ?>"><?= $s['seri']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Isi Artikel</label>
                                                <textarea class="form-control" name="content" rows="5" placeholder="Masukkan Konten Blog"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer -->
            <?php $this->view('backend/dashboard/d_footer'); ?>
        </div>
    </div>
    <?php $this->view('backend/template/footer'); ?>
    <script src="<?= base_url('assets/vendor/clipboard/dist/clipboard.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js') ?>"></script>
    <script>
        new ClipboardJS('.btnCopy');
        CKEDITOR.replace('content', {
            width: '100%',
            height: 700
        });
    </script>
    <div class="modal fade" tabindex="-1" id="modalLarge" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="w-100">
                </div>
            </div>
        </div>
    </div>