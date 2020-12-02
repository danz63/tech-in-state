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
                                    <h3 class="mb-0">Form Edit Klasifikasi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <form action="<?= base_url('classification/update') ?>" method="POST" id="formEdit">
                                    <input type="hidden" name="id" value="<?= $class['id'] ?>">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Nama Klasifikasi</label>
                                                <input class="form-control" type="text" name="name" id="name" placeholder="Klasifikasi" value="<?= $class['name'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Kategori Yang Termasuk</label>
                                                <div class="form-control bg-dark">
                                                    <?php foreach ($categories as $c) : ?>
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" id="check<?= $c['id'] ?>" name="categories[]" value="<?= $c['id'] ?>" <?= in_array($c['id'], $class['id_categories']) ? 'checked' : '' ?>>
                                                            <label class="custom-control-label text-white" for="check<?= $c['id'] ?>"><?= $c['category'] ?></label>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Status Klasifikasi</label>
                                                <?php if ($class['is_active'] == '1') : ?>
                                                    <div class="custom-control custom-switch ml-5">
                                                        <input type="checkbox" class="custom-control-input" id="switch" checked>
                                                        <label class="custom-control-label" for="switch">Aktif</label>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="custom-control custom-switch ml-5">
                                                        <input type="checkbox" class="custom-control-input" id="switch">
                                                        <label class="custom-control-label" for="switch">Nonaktif</label>
                                                    </div>
                                                <?php endif; ?>
                                                <input type="hidden" name="is_active" id="is_active" value="<?= $class['is_active']; ?>">
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