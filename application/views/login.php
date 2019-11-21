<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/fullcalendar.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootadmin/css/bootadmin.min.css'); ?>">

    <title>Login | Sistem Informasi Gereja Pringgolayan</title>
</head>
<body class="bg-light">

        <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <h1 class="text-center mb-4">Sistem Informasi Gereja Pringgolayan</h1>
                <div class="card">
                    <div class="card-body">
                        <?php echo $this->session->flashdata('message'); ?>
                        <?php echo form_open(base_url(), 'id="login-area"'); ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input name="username" type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <input name="submit" type="submit" class="btn btn-block btn-primary" value="Login">
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://www.google.com/recaptcha/api.js?render=6Lcu3bIUAAAAAB_3mig_03sADy-0rWHWGDwm92h3"></script>
<script src="<?php echo base_url('bootadmin/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/datatables.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/fullcalendar.min.js'); ?>"></script>
<script src="<?php echo base_url('bootadmin/js/bootadmin.min.js'); ?>"></script>

<script type="text/javascript">
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lcu3bIUAAAAAB_3mig_03sADy-0rWHWGDwm92h3', {action: 'login'}).then(function(token) {
            $('#login-area').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
        });
    });
</script>

</body>
</html>