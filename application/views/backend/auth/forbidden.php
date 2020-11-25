<?php $this->view('backend/template/header'); ?>

<body class="bg-default">
    <!-- Navbar -->
    <?php $this->view('backend/template/top_auth'); ?>
    <!-- Main content -->
    <div class="main-content">
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9">
                    <div class="card text-center border-0 mb-0 p-5">
                        <h1 class="header-form">403 Forbidden</h1>
                        <p class="text-black">Anda Tidak Mempunyai Hak untuk mengakses halaman ini</p>
                        <a href="<?= base_url('user') ?>">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <?php $this->view('backend/template/footer'); ?>