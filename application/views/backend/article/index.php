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
                                        <table class="table align-items-center table-flush w-auto">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Konten</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                <?php foreach ($article as $m) : ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <?= array_search($m, $article) + 1 ?>
                                                        </th>
                                                        <td>
                                                            <?= $m['title']; ?>
                                                        </td>
                                                        <td>
                                                            <?= html_escape($m['content']); ?>
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