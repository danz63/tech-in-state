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
            <?php $this->view('backend/dashboard/d_footer'); ?>
        </div>
    </div>
    <?php $this->view('backend/template/footer'); ?>