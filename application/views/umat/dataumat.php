<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <!-- .content -->
        <div class="content p-4">
        	
            <h2 class="mb-4"><?php echo $title_page; ?></h2>

        <div class="alert alert-info" role="alert">Halaman ini masih dalam tahap pengembangan!</div>

        <?php $this->load->view('umat/tambah-keluarga'); ?>

        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahkeluarga">Tambah Keluarga Baru</button>

        <?php echo $this->session->flashdata('message'); ?>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">Daftar Kepala Keluarga</div>
            <div class="card-body">
                <table id="datatableskepalakeluarga" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama Kepala Keluarga Lingkungan</th>
                            <th>No Keluarga</th>
                            <th>Action</th>
                            <!-- <th class="actions">Actions</th> -->
                        </tr>
                    </thead>
                   
                </table>

                <?php $this->load->view('umat/hapus-keluarga'); ?>

            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">Daftar Semua Umat Lingkungan</div>
            <div class="card-body">
                <table id="test" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nama Umat</th>
                            <th>Keluarga</th>       
                            <th>No. Keluarga</th>
                        </tr>
                    </thead>
                    
                </table>

            </div>
        </div>

        <!-- .content -->
        </div>