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
                                    <h3 class="mb-0">List Klasifikasi</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="<?= base_url('classification/create') ?>" class="btn btn-sm btn-primary">
                                        <i class="ni ni-fat-add"></i>
                                        Tambah Klasifikasi
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-7">
                                    <?php if (validation_errors() != "") : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
                                            <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                                            <span class="alert-text"><strong>Error !!!!</strong> <br><?= validation_errors() ?></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="font-weight-bold">Tabel Ini Untuk mengklasifikasikan Kategori, List inilah yang tampil pada header page di frontend user</p>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush w-auto">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Klasifikasi</th>
                                                    <th scope="col">Kategori yang termasuk</th>
                                                    <th scope="col">Status Aktif</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <?php if (count($classifications) < 1) : ?>
                                                    <tr>
                                                        <td colspan="3">Data Tidak Tersedia</td>
                                                    </tr>
                                                <?php endif; ?>
                                                <?php foreach ($classifications as $c) : ?>
                                                    <?php
                                                    $concat = '';
                                                    foreach ($rel as $r) {
                                                        if ($r['classification_id'] == $c['id'])
                                                            $concat .= $r['category'] . ", ";
                                                    }
                                                    $concat = rtrim($concat, ", ");
                                                    ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?= array_search($c, $classifications) + 1 ?>
                                                        </th>
                                                        <td>
                                                            <?= $c['name']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $concat; ?>
                                                        </td>
                                                        <td>
                                                            <span class="badge <?= $c['is_active'] == '1' ? 'badge-success' : 'badge-danger' ?>"><?= $c['is_active'] == '1' ? 'Aktif' : 'Nonaktif' ?></span>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url('classification/edit/' . $c['id']) ?>" class="btn btn-sm btn-success">
                                                                <i class="fas fa-fw fa-sm fa-edit"></i>
                                                                Edit
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