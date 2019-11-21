<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/datatables.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/fullcalendar.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/bootadmin.min.css') ?>">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.9.0/css/pro.min.css">
    <script src="<?php echo base_url('bootadmin/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <title><?php echo $title_page; ?></title>
</head>
<body>
    <h2 class="text-center"><?php echo $title_page; ?></h2>
    <table class="table table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No Keluarga</th>
            <th>Nama Kepala Keluarga</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($daftarkeluarga as $keluarga) { ?>
            <tr>
                <td><?php echo $keluarga['np']; ?></td>
                <td><?php echo $keluarga['kepalakeluarga']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
    </table>

</body>
</html>