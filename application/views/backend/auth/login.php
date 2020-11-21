<?php
$err = [
    'email' => form_error('email') !== '' ? 'border border-danger' : '',
    'password' => form_error('password') !== '' ? 'border border-danger' : ''
];
?>
<!-- Header -->
<?php $this->load->view('backend/template/header', $title); ?>

<body class="bg-default">
    <!-- Top Auth -->
    <?php $this->load->view('backend/template/top_auth'); ?>

    <div class="container mt--9 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2 class="header-form">Form Login</h2>
                        </div>
                        <form role="form" method="POST" action="<?= base_url('auth') ?>">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative <?= $err['email']; ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-email-83"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" placeholder="Surel" type="text" name="email" <?= form_error('email') ?> autofocus value="<?= set_value('email') ?>" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative <?= $err['password']; ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-lock-circle-open"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" placeholder="Kata Sandi" type="password" name="password" <?= form_error('password') ?>>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <small class="text-light">Belum punya akun? Daftar
                            <a href="<?= base_url('auth/registration') ?>" class="text-light">Disini!</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php $this->load->view('backend/template/footer'); ?>