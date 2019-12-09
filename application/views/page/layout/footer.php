<footer class="footer">
    <div class="container-fluid">
        <div class="copyright ml-auto">
            2019, <i class="fa fa-heart heart text-danger"></i> by <a href="#"><?= $this->auths->app()['by'] ?></a>
        </div>
    </div>
</footer>
</div>

</div>
<!--   Core JS Files   -->
<script src="<?= base_url('admin') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('admin') ?>/assets/js/core/popper.min.js"></script>
<script src="<?= base_url('admin') ?>/assets/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('admin') ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('admin') ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('admin') ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url('admin') ?>/assets/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url('admin') ?>/assets/js/setting-demo2.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    const success = '<?= $this->session->flashdata('success') ?>';
    const error = '<?= $this->session->flashdata('error') ?>';
    if (success) {
        toastr.success("<?= $this->session->flashdata('success') ?>")
    }
    if (error) {
        toastr.error("<?= $this->session->flashdata('error') ?>")
    }
</script>