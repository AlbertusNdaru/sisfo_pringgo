<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <!-- .content -->
        <div class="content p-4">

            <div class="row">
                <div class="col-md-8"><h2 class="mb-4"><?php echo $title_page; ?> <?php echo $datakeluarga['kepalakeluarga']; ?></h2></div>
                <div class="col-md-4 text-right"><button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#perbaruikeluarga">Perbarui Data Keluarga</button></div>
                <?php $this->load->view('umat/perbarui-keluarga'); ?>
            </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Info Umum Keluarga
                    </div>
                    <div class="card-body">
                        <p><strong>Nomor Keluarga</strong><br>
                        <?php echo $datakeluarga['np']; ?></p>
                        <p><strong>Nama Kepala Keluarga</strong><br>
                        <?php echo $datakeluarga['kepalakeluarga']; ?></p>
                        <p><strong>No. Telp</strong><br>
                        <?php echo $datakeluarga['telp']; ?></p>
                        <p><strong>Alamat</strong><br>
                        <?php echo $datakeluarga['alamat']; ?></p>
                        <p><strong>Jenis Rumah Tangga</strong><br>
                        <?php echo $jenis_kk[$datakeluarga['jenkk']]; ?></p>
                        <p><strong>Kondisi Ekonomi Keluarga</strong><br>
                        <?php echo $ekonomi[$datakeluarga['statusekonomi']]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Info Pernikahan Keluarga
                    </div>
                    <div class="card-body">
                        <p><strong>Status Pernikahan</strong><br>
                        <?php echo $status_kawin[$datakeluarga['stskwn']]; ?></p>
                        <p><strong>Liber Matrimoni Keluarga</strong><br>
                        <?php echo $datakeluarga['libermat']; ?></p>
                        <p><strong>Tempat Menikah</strong><br>
                        <?php echo $datakeluarga['tmpnikah']; ?></p>
                        <p><strong>Tanggal Menikah</strong><br>
                        <?php echo date_indo($datakeluarga['tglnikah']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white font-weight-bold">
                        Anggota Keluarga
                    </div>
                    <div class="card-body">
                        <?php echo $this->session->flashdata('message'); ?>
                        <?php $this->load->view('umat/tambah-anggota'); ?>
                        <button type="button" class="btn btn-sm btn-success mb-4" data-toggle="modal" data-target="#tambahanggota">Tambah Anggota Keluarga</button>
                        <table class="table table-hover mb-0">
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($anggotakeluarga as $umat) { 
                                $i++;
                                    ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $umat['nama']; ?></td>
                                    <td><?php echo $hubkk[$umat['hubkk']]; ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-icon btn-pill btn-warning" data-toggle="modal" data-target="#perbaruianggota-<?php echo $umat['id']; ?>"><i class="fa fa-fw fa-edit"></i></button>
                                        <?php if ($umat['hubkk'] !== '01') { ?>
                                        <button class="btn btn-sm btn-icon btn-pill btn-danger" data-toggle="modal" data-target="#hapusanggota-<?php echo $umat['id']; ?>"><i class="fa fa-fw fa-trash"></i></button>
                                        <?php } ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php $this->load->view('umat/perbarui-anggota'); ?>
                        <?php $this->load->view('umat/hapus-anggota'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- .content -->
        </div>