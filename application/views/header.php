<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <title><?php echo $title_page; ?> - Sistem Informasi Gereja Pringgolayan</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
        <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">Sisfo Pringgo</a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-fw fa-user"></i> <?php echo $this->session->userdata('username'); ?>
                        </button>
                        <div class="dropdown-menu">
                            <a href="<?php echo base_url('logout'); ?>" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- .d-flex -->
    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-secondary">
            <ul class="list-unstyled">
                <li class="nav-item <?php if($this->uri->segment(1) == 'dashboard'){echo 'active';}?>"><a href="<?php echo base_url(); ?>"><i class="fas fa-fw fa-church"></i> Dashboard</a></li>
                <?php if ($this->session->userdata('level') == 'administrator') { ?>
                <!-- JIKA ADMIN -->
                <li class="nav-item <?php if($this->uri->segment(1) == 'admin'){echo 'active';}?>"><a href="<?php echo base_url('admin'); ?>"><i class="fas fa-fw fa-user-cog"></i> Admin</a></li>
                <!-- JIKA ADMIN -->
                <?php } ?>
                <li class="nav-item <?php if($this->uri->segment(1) == 'umat'){echo 'active';}?>"><a href="<?php echo base_url('umat'); ?>"><i class="fas fa-fw fa-users"></i> Umat</a></li>
                <?php if ($this->session->userdata('level') == 'adminlingkungan') { ?>
                <!-- JIKA ADMIN LINGKUNGAN -->
                <li class="nav-item <?php if($this->uri->segment(1) == 'laporan'){echo 'active';}?>"><a href="<?php echo base_url('laporan'); ?>"><i class="fas fa-fw fa-chart-bar"></i> Laporan</a></li>
                <li class="nav-item <?php if($this->uri->segment(1) == 'profil-lingkungan'){echo 'active';}?>"><a href="<?php echo base_url('profil-lingkungan'); ?>"><i class="fas fa-fw fa-bookmark"></i> Profil Lingkungan</a></li>
                <li class="nav-item <?php if($this->uri->segment(1) == 'wilayah-lingkungan'){echo 'active';}?>"><a href="<?php echo base_url('wilayah-lingkungan'); ?>"><i class="fas fa-fw fa-map-marked"></i> Wilayah Lingkungan</a></li>
                <!-- JIKA ADMIN LINGKUNGAN -->
                <?php } ?>
            </ul>
        </div>