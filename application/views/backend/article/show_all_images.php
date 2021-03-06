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
                                    <h3 class="mb-0">Semua Foto</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <?php foreach ($images as $img) : ?>
                                        <div class="col-6 col-md-4 col-xl-3">
                                            <div class="card">
                                                <img class="card-img-top" src="<?= base_url('assets/backend/img/picture/' . $img['name']) ?>" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <button class="btn btn-sm btn-secondary btnCopy" data-clipboard-text="<?= base_url('assets/backend/img/picture/' . $img['name']) ?>">
                                                            Copy To Clipboard
                                                        </button>
                                                    </h5>
                                                    <button class="btn btn-sm btn-primary btnModal" data-image="<?= base_url('assets/backend/img/picture/' . $img['name']) ?>" data-title="<?= $img['name']; ?>">Show Modal</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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
    <script src="<?= base_url('assets/backend/vendor/clipboard/dist/clipboard.min.js') ?>"></script>
    <script>
        new ClipboardJS('.btnCopy');
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