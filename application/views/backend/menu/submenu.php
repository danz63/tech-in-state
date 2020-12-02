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
                                    <h3 class="mb-0">List Menu</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form">
                                        <i class="ni ni-fat-add"></i>
                                        Tambah Submenu
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <?php if (validation_errors() !== '') : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
                                            <span class="alert-icon"><i class="ni ni-notification-70"></i></span>
                                            <span class="alert-text"><strong>Error</strong>, <?= validation_errors() ?></span>
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
                                                    <th scope="col">Sub Menu</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">URL</th>
                                                    <th scope="col">Ikon</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <?php foreach ($submenu as $sm) : ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?= array_search($sm, $submenu) + 1 ?>
                                                        </th>
                                                        <td>
                                                            <?= $sm['title']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sm['menu']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sm['url']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $sm['icon']; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($sm['is_active'] == 1) : ?>
                                                                <button class="btn btn-sm btn-success btnToggleActivate" data-value="<?= $sm['id']; ?>" data-status="<?= $sm['is_active']; ?>" data-toggle="tooltip" data-placement="top" title="Nonaktifkan">
                                                                    <i class="fas fa-fw fa-sm fa-check-circle"></i>
                                                                    Aktif
                                                                </button>
                                                            <?php else : ?>
                                                                <button class="btn btn-sm btn-danger btnToggleActivate" data-value="<?= $sm['id']; ?>" data-status="<?= $sm['is_active']; ?>" data-toggle="tooltip" data-placement="top" title="Aktifkan">
                                                                    <i class="fas fa-fw fa-sm fa-times-circle"></i>
                                                                    Nonaktif
                                                                </button>
                                                            <?php endif; ?>
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
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <h3 class="header-form">Tambah Submenu</h3>
                        </div>

                        <form role="form" method="POST" action="<?= base_url('menu/submenu') ?>" id="myform">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ni ni-folder-17"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Submenu" type="text" name="title">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class=" ni ni-single-copy-04"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" name="menu_id">
                                            <option disabled selected>-- Pilih Menu --</option>
                                            <?php foreach ($menu as $m) : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ni ni-curved-next"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Url" type="text" name="url">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="ni ni-atom"></i>
                                            </span>
                                        </div>
                                        <input class="form-control" placeholder="Ikon" type="text" name="icon">
                                    </div>
                                </div>
                            </div>
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

    <div class="modal fade" id="modal-delete-submenu" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Konfirmasi</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="header-form confirm-message">Yakin menghapus data?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= base_url('/menu') ?>">Yakin</a>
                    <button type="button" class="btn btn-warning ml-auto" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>