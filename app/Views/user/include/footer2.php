<script src="<?= base_url('assets/backend/theme') ?>/dist/js/adminlte.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/toastr/toastr.min.js"></script>
<script>
    <?php
    $result = session()->getFlashdata("toaster");
    if ($result) {
        print "toastr.{$result['type']}('{$result['message']}')";
    }
    ?>

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
    function copyText(text){
        navigator.clipboard.writeText(text);
        toastr.success('Text Copied!')
    }
</script>
</body>

</html>