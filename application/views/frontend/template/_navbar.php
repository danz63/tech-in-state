<!-- partial:../partials/_navbar.html -->
<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="navbar-top-left-menu">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url() ?>assets/images/logo.svg" alt="" /></a>
                        </li>
                    </ul>
                    <ul class="navbar-top-right-menu">
                        <li class="nav-item">
                            <form action="">
                                <div class=" input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button type="submit" class="btn btn-sm btn-light pt-3 px-2"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                            <div class="d-none nav-logo">
                                <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/images/logo.svg" alt="" />></a>
                            </div>
                            <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                <li>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./magazine.html">News</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="../index.html">Programming</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./business.html">Networking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./sports.html">Design Multimedia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="social-media">
                        <li>
                            <a href="#">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>