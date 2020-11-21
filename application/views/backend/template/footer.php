<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<!-- <script src="<?= base_url('assets/vendor/js-cookie/js.cookie.js') ?>"></script> -->
<script src="<?= base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/chart.js/dist/Chart.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/chart.js/dist/Chart.extension.js') ?>"></script>
<!-- Argon JS -->
<script src="<?= base_url('assets/js/argon.js') ?>"></script>
<!-- Editable script js -->
<script src="<?= base_url('assets/js/myscript.js') ?>"></script>

<!-- Modal Notofication -->
<?php if ($this->session->flashdata('flash') != NULL) : ?>
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="false">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-<?= $this->session->flashdata('flash')['bg'] ?>">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification"><?= $this->session->flashdata('flash')['title'] ?></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4"><?= $this->session->flashdata('flash')['heading'] ?></h4>
                        <p><?= $this->session->flashdata('flash')['text'] ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script>
        $("#modal-notification").modal('show');
    </script>
<?php endif; ?>
</body>

</html>