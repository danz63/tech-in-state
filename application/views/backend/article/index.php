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
                                    <h3 class="mb-0">List Article</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="<?= base_url('article/insert_image') ?>" class="btn btn-sm btn-primary">
                                        <i class="ni ni-fat-add"></i>
                                        Tambah Artikel
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" style="width: 15px;">#</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Konten</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <?php if (count($article) < 1) : ?>
                                                    <tr>
                                                        <th colspan="4">Data Belum Tersedia</th>
                                                    </tr>
                                                <?php endif; ?>
                                                <?php foreach ($article as $m) : ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?= array_search($m, $article) + 1 ?>
                                                        </th>
                                                        <td>
                                                            <?= $m['title']; ?>
                                                        </td>
                                                        <td>
                                                            <?= substr(html_escape($m['content']), 0, 100); ?> ...
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-success buttonEdit" data-value="<?= $m['id']; ?>">
                                                                <i class="fas fa-fw fa-sm fa-edit"></i>
                                                                Edit
                                                            </a>
                                                            <a href="#" class="btn btn-sm btn-danger btnDelete" data-value="<?= $m['id']; ?>">
                                                                <i class="fas fa-fw fa-sm fa-eraser"></i>
                                                                Hapus
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?= base_url('/article') ?>">Yakin</a>
                    <button type="button" class="btn btn-warning ml-auto" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>