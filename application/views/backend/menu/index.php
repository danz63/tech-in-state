<?php $this->load->view('backend/template/header', $title); ?>

<body>
    <!-- Sidenav -->
    <?php $this->load->view('backend/dashboard/d_sidenav', $sidebar); ?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <?php $this->load->view('backend/dashboard/d_topnav', ['bg' => 'default']); ?>
        <!-- Header -->
        <?php $this->load->view('backend/dashboard/d_header'); ?>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">List Menu</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form">
                                        <i class="ni ni-fat-add"></i>
                                        Tambah Menu
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5">
                                    <?php if (form_error('menu') !== '') : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
                                            <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                                            <span class="alert-text"><strong>Error</strong>, <?= form_error('menu') ?></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush w-auto">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <?php foreach ($menu as $m) : ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?= array_search($m, $menu) + 1 ?>
                                                        </th>
                                                        <td>
                                                            <?= $m['menu']; ?>
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
            <?php $this->load->view('backend/dashboard/d_footer'); ?>
        </div>
    </div>
    <?php $this->load->view('backend/template/footer'); ?>
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <h3 class="header-form">Tambah Menu</h3>
                        </div>
                        <form role="form" method="POST" action="<?= base_url('menu') ?>" id="myform">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ni ni-folder-17"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Menu" type="text" name="menu">
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
                    <a class="btn btn-primary" href="<?= base_url('/menu') ?>">Yakin</a>
                    <button type="button" class="btn btn-warning ml-auto" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>