<?php
$split = explode('/', $_SERVER['REQUEST_URI']);
$controller = $split[2];
$method = !empty($split[3]) ? $split[3] : "index";
?>
<div class="header bg-gradient-default opacity-8 pb-6">
      <div class="container-fluid">
            <div class="header-body">
                  <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                              <h6 class="h2 text-white d-inline-block mb-0">Menu</h6>
                              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                          <li class="breadcrumb-item"><i class="fas fa-home"></i></li>
                                          <li class="breadcrumb-item"><?= ucfirst($controller); ?></li>
                                          <li class="breadcrumb-item active" aria-current="page"><?= ucfirst($method); ?></li>
                                    </ol>
                              </nav>
                        </div>
                  </div>
                  <!-- Card stats -->
                  <?php if ($controller == 'admin') : ?>
                        <div class="row">
                              <div class="col-xl-3 col-md-6">
                                    <div class="card card-stats">
                                          <!-- Card body -->
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Total Trafik</h5>
                                                            <span class="h2 font-weight-bold mb-0">350,897</span>
                                                      </div>
                                                      <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                                  <i class="ni ni-active-40"></i>
                                                            </div>
                                                      </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                      <span class="text-nowrap">Sejak Bulan Lalu</span>
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                    <div class="card card-stats">
                                          <!-- Card body -->
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Pengguna Baru</h5>
                                                            <span class="h2 font-weight-bold mb-0">2,356</span>
                                                      </div>
                                                      <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                                  <i class="ni ni-chart-pie-35"></i>
                                                            </div>
                                                      </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                      <span class="text-nowrap">Sejak Bulan Lalu</span>
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                    <div class="card card-stats">
                                          <!-- Card body -->
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Penjualan</h5>
                                                            <span class="h2 font-weight-bold mb-0">924</span>
                                                      </div>
                                                      <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                                  <i class="ni ni-money-coins"></i>
                                                            </div>
                                                      </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                      <span class="text-nowrap">Sejak Bulan Lalu</span>
                                                </p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                    <div class="card card-stats">
                                          <!-- Card body -->
                                          <div class="card-body">
                                                <div class="row">
                                                      <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Performa</h5>
                                                            <span class="h2 font-weight-bold mb-0">49,65%</span>
                                                      </div>
                                                      <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                                  <i class="ni ni-chart-bar-32"></i>
                                                            </div>
                                                      </div>
                                                </div>
                                                <p class="mt-3 mb-0 text-sm">
                                                      <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                      <span class="text-nowrap">Sejak Bulan Lalu</span>
                                                </p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  <?php endif; ?>
            </div>
      </div>
</div>