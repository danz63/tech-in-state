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
                                    <h3 class="mb-0">List Kategori</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form">
                                        <i class="ni ni-fat-add"></i>
                                        Tambah Kategori
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5">
                                    <?php if (form_error('category') !== '') : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
                                            <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                                            <span class="alert-text"><strong>Error</strong>, <?= form_error('category') ?></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <?php foreach ($categories as $category) : ?>
                                    <div class="col-xl-2 col-md-2 col-4">
                                        <div class="card" style="width: 10rem;">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $category['category']; ?></h5>
                                                <a href="#" class="btn btn-sm btn-success buttonEditCategory" data-value="<?= $category['id']; ?>">
                                                    <i class="far fa-fw fa-edit"></i>
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
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
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <h3 class="header-form">Tambah Kategori</h3>
                        </div>
                        <form role="form" method="POST" action="<?= base_url('category') ?>" id="myform">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ni ni-folder-17"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Kategori" type="text" name="category">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Konfirmasi</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="header-form">Yakin menghapus data?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= base_url('/category') ?>">Yakin</a>
                    <button type="button" class="btn btn-warning ml-auto" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div> -->