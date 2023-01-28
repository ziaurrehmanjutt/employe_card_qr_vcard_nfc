<script src="<?= base_url('assets/backend/theme') ?>/dist/js/adminlte.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/toastr/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


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

    function copyText(text) {
        navigator.clipboard.writeText(text);
        toastr.success('Text Copied!')
    }


    function showConfirm(title, content, btnText, bntColor) {
        return new Promise((resolve) => {
            $.confirm({
                title,
                content,
                buttons: {
                    cancel: function() {
                        resolve(false);
                    },
                    heyThere: {
                        text: btnText, // With spaces and symbols
                        btnClass: 'btn-' + bntColor,
                        action: function() {
                            resolve(true);
                        }
                    }
                }
            });
        })
    }
</script>
</body>

</html>