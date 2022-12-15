<link rel="stylesheet" href="<?= base_url('assets/backend/theme') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('assets/backend/theme') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('assets/backend/theme') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/backend/theme') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>