<?php $this->view('backend/template/header', $title); ?>
<script>
    var num = 0;
</script>

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
                                    <h3 class="mb-0">Upload gambar</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('article/store_image') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-10 p-2 border">
                                        <div class="custom-file my-1">
                                            <input type="file" class="custom-file-input" id="file0" name="image[]">
                                            <label class="custom-file-label" for="file0">Select file</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 p-2 border">
                                        <div class="text-center my-2">
                                            <button type="button" class="btn btn-sm btn-success" onclick="addInputImage();">
                                                <i class="fas fa-fw fa-plus"></i>
                                                Tambah Foto
                                            </button>
                                        </div>
                                        <div class="text-center mt-5">
                                            <button type="submit" class="btn btn-outline-primary">
                                                <i class="fas fa-angle-right"></i>
                                                <span>Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php $this->view('backend/dashboard/d_footer'); ?>
        </div>
    </div>
    <?php $this->view('backend/template/footer'); ?>
    <script>
        function addInputImage() {
            num++;
            var str = `
            <div class="custom-file my-1">
                <input type="file" class="custom-file-input" id="file` + num + `" name="image[]">
                <label class="custom-file-label" for="file` + num + `">Select file</label>
            </div>`;
            $(".card-body form .row .col-xl-10").append(str);
        }
    </script>