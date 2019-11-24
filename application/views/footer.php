<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- .d-flex -->
</div>

<script src="<?php echo base_url('bootadmin/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo base_url('bootadmin/js/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('bootadmin/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url('bootadmin/js/fullcalendar.min.js') ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootadmin.min.js') ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatableskepalakeluarga').DataTable({
            'length': 10,
            'serverSide': true,
            "processing": true,
            'ajax': {
                'url': "<?= base_url("Umat/getKepalaKeluarga") ?>",
                "dataSrc": "data"
            }
        });
        $('#test').DataTable({
            'length': 10,
            'serverSide': true,
            "processing": true,
            'ajax': {
                'url': "<?= base_url("Umat/getUmt") ?>",
                "dataSrc": "data"
            }
        });
        $('.tanggal-lahir, .tanggal-menikah').flatpickr({
            altInput: true,
            altFormat: 'j F Y',
            dateFormat: 'Y-m-d',
        });
    });
</script>

</body>

</html>