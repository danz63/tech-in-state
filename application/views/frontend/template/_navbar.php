<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-bottom py-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="nav-logo show">
                            <a class="" href="<?= base_url('home') ?>">
                                <img src="<?= base_url() ?>assets/frontend/images/logo.svg" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav d-lg-flex">
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>
                                <?php foreach ($topnav as $t) : ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="NavBarDropdown<?= $t['id'] ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $t['name']; ?></a>
                                        <div class="dropdown-menu bg-primary border-cyan py-0" aria-labelledby="NavBarDropdown<?= $t['id'] ?>">
                                            <?php foreach ($subtopnav as $st) : ?>
                                                <?php if ($st['classification_id'] == $t['id']) : ?>
                                                    <a class="dropdown-item nav-link py-2 my-0" href="<?= base_url(strtolower($t['name']) . "/" . strtolower($st['category'])); ?>"><?= $st['category'] ?></a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <ul class="social-media">
                            <li>
                                <form action="" class="form-inline">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn btn-sm btn-light pt-3 px-2"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </form>
                            </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="TechInState">
                                <a href="#">
                                    <i class="mdi mdi-facebook"></i>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Chanel Tech In State">
                                <a href="#">
                                    <i class="mdi mdi-youtube"></i>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="@TechInState">
                                <a href="#">
                                    <i class="mdi mdi-instagram"></i>
                                </a>
                            </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Sign In">
                                <a href="<?= base_url('auth') ?>">
                                    <i class="mdi mdi-login"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>