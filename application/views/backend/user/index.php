<?php
$last_name = explode(' ', $user['name']);
$last_name = $last_name[count($last_name) - 1];
?>
<?php $this->view('backend/template/header', $title); ?>

<body>
      <!-- Sidenav -->
      <?php $this->view('backend/dashboard/d_sidenav'); ?>
      <!-- Main content -->
      <div class="main-content" id="panel">
            <!-- Topnav -->
            <?php $this->view('backend/dashboard/d_topnav', ['bg' => 'default']); ?>
            <!-- Header -->
            <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?= base_url('assets/img/dashboard/team.jpg') ?>); background-size: cover; background-position: center top;">
                  <!-- Mask -->
                  <span class="mask bg-gradient-default opacity-8"></span>
                  <!-- Header container -->
                  <div class="container-fluid d-flex align-items-center">
                        <div class="row">
                              <div class="col-lg-7 col-md-10">
                                    <h1 class="display-2 text-white">Halo, <?= $last_name ?></h1>
                                    <p class="text-white mt-0 mb-5">Ini Adalah halaman profilmu. Kamu dapat mengedit profilmu, atau meninjau aktifitas yang dilakukan di web kami</p>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                  <div class="row">
                        <div class="col-xl-4 order-xl-2">
                              <div class="card card-profile">
                                    <img src="<?= base_url('assets/img/dashboard/friendship.jpg') ?>" alt="Image placeholder" class="card-img-top">
                                    <div class="row justify-content-center">
                                          <div class="col-lg-3 order-lg-2">
                                                <div class="card-profile-image">
                                                      <a href="#">
                                                            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="rounded-circle">
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                                          <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-sm btn-info mr-4">Aktifitas</a>
                                                <a href="#" class="btn btn-sm btn-default float-right">Pesan</a>
                                          </div>
                                    </div>
                                    <div class="card-body pt-0">
                                          <div class="row">
                                                <div class="col">
                                                      <div class="card-profile-stats d-flex justify-content-center">
                                                            <div>
                                                                  <span class="heading">22</span>
                                                                  <span class="description">Teman</span>
                                                            </div>
                                                            <div>
                                                                  <span class="heading">10</span>
                                                                  <span class="description">Foto</span>
                                                            </div>
                                                            <div>
                                                                  <span class="heading">89</span>
                                                                  <span class="description">Komentar</span>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="text-center">
                                                <h5 class="h3">
                                                      <?= $user['name'] ?>
                                                </h5>
                                                <div class="h4 my-4">
                                                      <?= $user['email'] ?>
                                                </div>
                                                <div class="h5 text-muted">
                                                      Akun Dibuat pada
                                                </div>
                                                <div class="h5">
                                                      <?= date('dS M, Y', $user['created_at']) ?>
                                                </div>
                                                <div class="h5 text-muted">
                                                      Sesi login terakhir
                                                </div>
                                                <div class="h5">
                                                      <?= date('D dS M \'y, H:i', $user['last_login']) ?>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-xl-8 order-xl-1">
                              <div class="card">
                                    <div class="card-header">
                                          <div class="row align-items-center">
                                                <div class="col-8">
                                                      <h3 class="mb-0">Edit profil </h3>
                                                </div>
                                                <div class="col-4 text-right">
                                                      <a href="#!" class="btn btn-sm btn-primary" id="btn-edit">Edit</a>
                                                      <a href="#!" class="btn btn-sm btn-danger disabled" id="btn-cancel">Batal</a>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="card-body">
                                          <form action="<?= base_url('user/update') ?>" method="POST" enctype="multipart/form-data">
                                                <h6 class="heading-small text-muted mb-4">Informasi pengguna</h6>
                                                <div class="pl-lg-4">
                                                      <div class="row">
                                                            <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                        <label class="form-control-label" for="input-email">Alamat Surel</label>
                                                                        <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="Email" value="<?= $user['email']; ?>" readonly>
                                                                        <small class="text-muted">Surel tidak bisa diubah</small>
                                                                  </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                        <label class="form-control-label" for="input-name">Nama</label>
                                                                        <input type="text" id="input-name" class="form-control form-control-alternative" value="<?= $user['name']; ?>" readonly>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                        <label class="form-control-label" for="input-password">Kata Sandi Baru</label>
                                                                        <input type="password" id="input-password" class="form-control form-control-alternative" placeholder="Password" readonly>
                                                                        <small class="text-muted">Kosongkan Jika Kata Sandi tidak ingin diubah</small>
                                                                  </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                  <div class="form-group">
                                                                        <label class="form-control-label" for="input-r_password">Ulangi Kata Sandi</label>
                                                                        <input type="password" id="input-r_password" class="form-control form-control-alternative" placeholder="Repeat Password" readonly>
                                                                        <small class="text-muted">Kosongkan Jika Kata Sandi tidak ingin diubah</small>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="col-lg-12">
                                                                  <label class="form-control-label">Ganti Gambar</label>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="col-lg-12">
                                                                  <div class="custom-file">
                                                                        <input type="file" id="input-image" class="custom-file-input" lang="en" name="image" disabled>
                                                                        <label class="custom-file-label" for="input-image">Ganti Gambar</label>
                                                                  </div>
                                                                  <small class="text-muted">Kosongkan Jika foto tidak ingin diubah</small>
                                                            </div>
                                                      </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-4" />
                                                <div class="row">
                                                      <div class="col-lg-3">
                                                            <button class="btn btn-primary btn-block" type="submit" disabled>
                                                                  <i class="fas fa-fw fa-save"></i>&nbsp;Simpan
                                                            </button>
                                                      </div>
                                                      <div class="col-lg-3">
                                                            <button class="btn btn-warning btn-block" type="reset" disabled>
                                                                  <i class="fas fa-fw fa-eraser"></i>&nbsp;Reset
                                                            </button>
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