<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light nav-open bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                  <a class="navbar-brand" href="javascript:void(0)">
                        <img src="<?= base_url() ?>/assets/img/icons/LogoText.png" class="navbar-brand-img" alt="...">
                  </a>
            </div>
            <div class="navbar-inner">
                  <!-- Collapse -->
                  <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Divider -->
                        <hr class="my-3">
                        <?php foreach ($sidebar as $sb) : ?>
                              <!-- Nav Head Menu -->
                              <!-- <h6 class="navbar-heading p-0 text-muted">
                                    <span class="docs-normal"><?= $sb['title']; ?></span>
                              </h6> -->
                              <ul class="navbar-nav">
                                    <!-- Nav items -->
                                    <?php foreach ($sb['submenu'] as $m) : ?>
                                          <li class="nav-item <?= $m['title'] == $title ? 'active' : '' ?>">
                                                <a class="nav-link" href="<?= base_url($m['url']) ?>">
                                                      <i class="<?= $m['icon']; ?>"></i>
                                                      <span class="nav-link-text pt-1-2"><?= $m['title']; ?></span>
                                                </a>
                                          </li>
                                    <?php endforeach; ?>
                              </ul>
                              <hr class="my-3">
                        <?php endforeach; ?>
                        <ul class="navbar-nav">
                              <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#modal-default" href="#">
                                          <i class="ni ni-button-power ni-lg text-danger"></i>
                                          <span class="nav-link-text pt-1-2">Keluar</span>
                                    </a>
                              </li>
                        </ul>
                  </div>
            </div>
      </div>
</nav>