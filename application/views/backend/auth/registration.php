<?php
$err = [
    'name' => form_error('name') !== '' ? 'border border-danger' : '',
    'email' => form_error('email') !== '' ? 'border border-danger' : '',
    'password' => form_error('password') !== '' ? 'border border-danger' : ''
];
?>
<?php $this->view('backend/template/header', $title); ?>

<body class="bg-default">
    <?php $this->view('backend/template/top_auth'); ?>
    <div class="container mt--9 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2 class="header-form">Form Registrasi</h2>
                        </div>
                        <form role="form" method="POST" action="<?= base_url('auth/registration') ?>">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative <?= $err['name']; ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-badge"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" placeholder="Full Name" type="text" name="name" autocomplete="off" value="<?= set_value('name') ?>" <?= form_error('name') ?> autofocus>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative <?= $err['email']; ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-email-83"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" placeholder="Surel" type="text" name="email" autocomplete="off" value="<?= set_value('email') ?>" <?= form_error('email') ?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-lock-circle-open"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" placeholder="Kata Sandi" type="password" name="password" autocomplete="off" <?= form_error('password') ?>>
                                </div>
                                <small class="text-muted ml-2">Panjang Minimal 8 Karakter</small>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative <?= $err['password']; ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ni ni-lock-circle-open"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" placeholder="Ulangi Kata Sandi" type="password" name="r_password" autocomplete="off">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <small class="text-light">Sudah punya akun? Masuk <a href="<?= base_url('auth/index') ?>" class="text-light">Disini!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->view('backend/template/footer'); ?>